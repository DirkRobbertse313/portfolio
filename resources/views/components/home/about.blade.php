<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-600 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex items-center -mx-3 sm:-mx-4">
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/img/image1.png') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/img/phplogo1.jpg') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
            </div>
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="my-4 relative z-10">
                <img
                  src="{{ url('/img/portfolio.png') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
                <x-about-dots></x-about-dots>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
          <div class="mt-10 lg:mt-0">
            <span class="font-semibold text-lg text-primary mb-2 block">
               <blockquote class="text-sm text-gray-800 italic py-2 px-3 border-l-4 border-amber-500">
                   "Everything is achievable through hard work"
               </blockquote>
            </span>
            <h2
                class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8"
            >
              About Me
            </h2>
            <p
                class="text-base dark:text-gray-800 mb-8"
            >
                I have been working as a software developer for over a year.  <br />
                Throughout my career, I have worked on diverse projects using various technologies,
                However, I often find myself feeling like a junior developer who has just begun their coding journey.
              <br/>
            </p>
            <p
                class="text-base dark:text-gray-400 mb-8"
            >
              In 2023 I decided to create a YouTube channel and share my knowledge. In 2023 I decided to create a YouTube channel and share my knowledge. My channel is mostly focused on
              <span class="text-amber-500 font-bold">PHP</span> and
              <span class="text-amber-500 font-bold">Laravel</span>.
              <br/>
                The content on my YouTube channel is mostly focused on practical examples and projects.
              <br />
            </p>
            <x-button-link
                href="https://www.youtube.com/@Laracastsofficial"
                variant="red"
                target="_blank"
            >
              View my channel
            </x-button-link>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->