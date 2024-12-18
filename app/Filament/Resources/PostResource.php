<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;

use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // SEO
                Section::make('SEO')
                    ->icon('heroicon-o-globe-alt')
                    ->collapsible()
                    ->collapsed()
                    ->description('Wprowadź meta title (krótki, opisowy tytuł strony) oraz meta description (krótki opis strony widoczny w wynikach wyszukiwarek), które informują użytkowników o treści strony.')
                    ->schema([

                        Shout::make('info')
                            ->content('Meta tagi zostaną uzupełnione automatycznie jeżeli ich nie podasz, zachęcamy jednak do zrobienia tego ręcznie w celu lepszej optymalizacji')
                            ->type('info'),

                        TextInput::make('meta_title')
                            ->label('Tytuł Meta')
                            ->placeholder('Meta title to tytuł strony internetowej wyświetlany w wynikach wyszukiwarek i na kartach przeglądarki.')
                            ->characterLimit(60)
                            ->minLength(10)
                            ->maxLength(75)
                            ->columnSpanFull(),

                        TextInput::make('meta_description')
                            ->label('Opis Meta')
                            ->placeholder('Meta description to krótki opis strony internetowej wyświetlany w wynikach wyszukiwarek, który informuje użytkowników o jej treści.')
                            ->characterLimit(160)
                            ->minLength(10)
                            ->maxLength(180)
                            ->columnSpanFull(),
                    ]),
                // CONTENT
                Section::make('Treść')
                    ->icon('heroicon-o-pencil')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed(false)
                    ->description('Wprowadź treść posta, wybierz miniaturkę, kategorie oraz datę publikacji')
                    ->schema([

                        Forms\Components\TextInput::make('title')
                            ->label('Tytuł')
                            ->unique(ignoreRecord: true)
                            ->required()
                            ->minLength(3)
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->readonly()
                            ->required()
                            ->minLength(3)
                            ->maxLength(255),

                        RichEditor::make('content')
                            ->label('Treść posta')
                            ->required()
                            ->columnSpanFull(),

                            FileUpload::make('thumbnail_mobile')
                            ->label('Miniaturka-mobile')
                            ->directory('thumbnails-post')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => 'lodowisko-bialka' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                            )
                            ->image()
                            ->maxSize(4096)
                            ->optimize('webp')
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->columnSpanFull(),

                        FileUpload::make('thumbnail')
                            ->required()
                            ->label('Miniaturka')
                            ->directory('thumbnails-post')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => 'lodowisko-bialka' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                            )
                            ->image()
                            ->maxSize(4096)
                            ->optimize('webp')
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->columnSpanFull(),


                        DateTimePicker::make('published_at')
                            ->label('Data publikacji')
                            ->columns(1)
                            ->default(now())
                            ->required(),

                        
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->defaultSort('published_at', 'desc')
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                ->label('Miniaturka')
                ->circular(),

            Tables\Columns\TextColumn::make('title')
                ->label('Tytuł')
                ->searchable()
                ->sortable()
                // ->url(fn($record) => url($record->slug))
                ->description(function (Post $record) {
                    return Str::limit(strip_tags($record->content), 40);
                })
                ->openUrlInNewTab(),

            Tables\Columns\TextColumn::make('published_at')
                ->label('Data publikacji')
                ->badge()
                ->dateTime()
                ->formatStateUsing(function ($state) {
                    return Carbon::parse($state)->format('d-m-Y H:i');
                })
                ->color(function ($state) {
                    if ($state <= Carbon::now()) {
                        return 'success';
                    } else {
                        return 'danger';
                    }
                })
                ->sortable(),


                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Posty');
    }
    public static function getPluralLabel(): string
    {
        return ('Posty');
    }

    public static function getLabel(): string
    {
        return ('Post');
    }
}
