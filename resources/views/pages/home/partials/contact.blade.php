<x-section id="kontakt">

    <div class="max-w-screen-xl mx-auto py-12  flex flex-col lg:flex-row justify-between items-center gap-24">


        <div class="w-full lg:w-1/2 flex flex-col items-start justify-start gap-12">
            <h2 class="text-left text-5xl" style="line-height: 1.2">Potrzebujesz informacji? <br /> Skontaktuj się z
                nami!</h2>

            <div class="flex flex-col items-start justify-start gap-3">

                <p>Masz pytania dotyczące naszego lodowiska, wypożyczalni lub gastronomii? Jesteśmy tutaj, aby pomóc!
                </p>
                <p>Zachęcamy do kontaktu – chętnie udzielimy informacji, rozwiejemy wątpliwości i pomożemy w
                    organizacji
                    Twojej wizyty.</p>
                <p>Czekamy na Twoje wiadomości!</p>


            </div>


        </div>
        <div class="w-full lg:w-1/2 flex justify-center items-center gap-3">
            <form class="w-full mx-auto">

                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Imię i nazwisko:</label>
                    <input type="text" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-400 focus:border-primary-400 block  p-2.5 w-full"
                        required />
                </div>

                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email:</label>
                    <input type="email" id="email"
                        class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-400 focus:border-primary-400 block  p-2.5 "
                        required />
                </div>


                <div class="mb-5">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Wiadomość:</label>
                    <textarea id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-400 focus:border-primary-400 min-h-[200px] max-h-[200px]"></textarea>
                </div>

                <button type="submit"
                    class="text-white bg-primary-400 hover:bg-primary-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Wyślij</button>
            </form>
        </div>

    </div>


    {{-- container --}}
    <x-wrapper class="max-w-screen-xl pb-12 md:pb-24">
        <div class="flex flex-col lg:flex-row justify-between items-center gap-24">

            <div class="w-full lg:w-1/2 flex justify-center items-center gap-3 order-1 lg:order-none">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2597.216828269981!2d20.103323977479494!3d49.38589027140848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715f0c719092ecd%3A0x78d8c0aff40115f5!2s%C5%9Arodkowa%20161%2C%2034-405%20Bia%C5%82ka%20Tatrza%C5%84ska!5e0!3m2!1spl!2spl!4v1729766944564!5m2!1spl!2spl "
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" title="lodowisko Biała Owca" class="w-full"></iframe>

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
                        <a href="tel:+48608371137" class="text-xl">+48 608 371 137</a>
                    </div>

                    <div class="flex justify-center items-center flex-col ">
                        <h3 class="text-center text-2xl font-heading mb-4">Adres</h3>
                        <a href="https://maps.app.goo.gl/RDUQSZV2nCxN6gA69" class="text-xl text-center">Środkowa 161
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