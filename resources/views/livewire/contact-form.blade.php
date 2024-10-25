<form class="w-full mx-auto" wire:submit.prevent='submitForm' method="POST" id="contactForm" >

    @csrf
    @if ($successMessage)
    <div class="rounded-md bg-green-50 p-4 mt-8">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm leading-5 font-medium text-green-800">
                    {{ $successMessage }}
                </p>
            </div>
            <div class="ml-auto pl-3">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button" wire:click="$set('successMessage', null)"
                        class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150"
                        aria-label="Dismiss">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif

{{-- name --}}
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Imię i nazwisko:</label>
        <input wire:model.live.lazy="name" type="text" id="name" name="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-400 focus:border-primary-400 block  p-2.5 w-full"
            required />
            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
    </div>

    {{-- email --}}
    <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email:</label>
        <input wire:model.live.lazy="email" type="email" id="email" name="email"
            class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-400 focus:border-primary-400 block  p-2.5 "
            required />
            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
    </div>

{{-- content --}}
    <div class="mb-5" >
        <label for="content" class="block mb-2 text-sm font-medium text-gray-900 ">Wiadomość:</label>
        <textarea wire:model.live.lazy="content" id="content" name="content"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-400 focus:border-primary-400 min-h-[200px] max-h-[200px]"></textarea>
    </div>

    <p class="text-xs mb-5">Ta strona jest chroniona przez reCAPTCHA, a jej działanie regulują <a href="https://policies.google.com/privacy" class="italic" target="_blank" rel="norefferer nofollow">Polityka prywatności</a> i <a href="https://policies.google.com/terms" class="italic" target="_blank" rel="norefferer nofollow">Warunki korzystania z usługi</a> Google.</p>

    {{-- submit --}}
    <button data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}" data-callback='handle' data-action='submit' type="submit" wire.loading.attr="disabled" type='submit' aria-label="Wyślij"
        class="text-white bg-primary-400 hover:bg-primary-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center "><svg
        wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-2 h-5 w-5 text-white"
        xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24">
        <circle class="opacity-40" cx="12" cy="12" r="10" stroke="#000000" stroke-width="4"></circle>
        <path class="opacity-75" fill="#fff"
            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
        </path>
    </svg>Wyślij</button>
</form>


<script src="https://www.google.com/recaptcha/api.js?render={{ env('CAPTCHA_SITE_KEY') }}"></script>
<script>
    function handle(e) {
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ env('CAPTCHA_SITE_KEY') }}', {
                    action: 'submit'
                })
                .then(function(token) {
                    @this.set('captcha', token);
                });
        })
    }
</script>