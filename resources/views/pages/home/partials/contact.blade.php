<x-section id="kontakt">

    <div class="max-w-screen-xl mx-auto py-6 sm:py-12  flex flex-col lg:flex-row justify-between items-center gap-12 sm:gap-24">


        <div class="w-full lg:w-1/2 flex flex-col items-start justify-start gap-12">
            <h2 class="text-center md:text-left text-5xl" style="line-height: 1.2">Potrzebujesz informacji? <br /> Skontaktuj się z
                nami!</h2>

            <div class="flex flex-col items-center sm:items-start justify-center sm:justify-start gap-3 text-center sm:text-left text-xl ">

                <p>Masz pytania dotyczące naszego lodowiska, wypożyczalni lub gastronomii? Jesteśmy tutaj, aby pomóc!
                </p>
                <p>Zachęcamy do kontaktu – chętnie udzielimy informacji, rozwiejemy wątpliwości i pomożemy w
                    organizacji
                    Twojej wizyty.</p>
                <p class="text-center sm:text-left">Czekamy na Twoje wiadomości!</p>


            </div>


        </div>
        <div class="w-full lg:w-1/2 flex justify-center items-center gap-3">
         <livewire:contact-form />
        </div>

    </div>


    {{-- container --}}
    <x-wrapper class="max-w-screen-xl pb-12 md:pb-24">
        <div class="flex flex-col lg:flex-row justify-between items-center gap-12 sm:gap-24">

            <div class="w-full lg:w-1/2 flex justify-center items-center gap-3 order-1 lg:order-none">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5194.433685233836!2d20.105899!3d49.38589!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715f1ac4a749f57%3A0x989eab9c05cca23d!2sLodowisko%20Bia%C5%82a%20Owca!5e0!3m2!1spl!2spl!4v1730874951655!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="lodowisko Biała Owca" class="w-full"></iframe>

            </div>

            <div class="w-full lg:w-1/2 flex flex-col items-center justify-start gap-12">
                <x-heading>Lodowisko <br /> Biała Owca</x-heading>

                <div class="grid sm:grid-cols-2 w-full gap-6">

                    <div class="flex justify-center items-center flex-col ">
                        <h3 class="text-center text-2xl font-heading mb-4">Email</h3>
                        <a href="mailto:kontakt@lodowiskobialka.pl" class="text-xl">kontakt@lodowiskobialka.pl</a>
                    </div>

                    <div class="flex justify-center items-center flex-col ">
                        <h3 class="text-center text-2xl font-heading mb-4">Telefon</h3>
                        <a href="tel:+48734775817" class="text-xl">+48 734 775 817</a>
                    </div>

                    <div class="flex justify-center items-center flex-col ">
                        <h3 class="text-center text-2xl font-heading mb-4">Adres</h3>
                        <a href="https://maps.app.goo.gl/GNqpgpcfAvYnMM6W6" class="text-xl text-center">Środkowa 161
                            <br />Białka Tatrzańska</a>
                    </div>

                    <div class="flex justify-center items-center flex-col ">
                        <h3 class="text-center text-2xl font-heading mb-4">Godziny otwarcia</h3>
                        <p " class=" text-xl text-center">codziennie <br />10-21</p>
                    </div>


                </div>


            </div>


        </div>
    </x-wrapper>
</x-section>