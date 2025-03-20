<?php
/**
 * Template Name: Rosteriet
 *
 * Template used to show the new rosteriet page
 */
get_header();
?>

<div class="rost-header w-full  ">
    <div class="inner-header ">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rosterietlogo.png" alt="Logo">
        </div>
        <div class="infos">
            <div class="contact">
                <div class="icon-rost">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/telephone.png" alt="Logo">1234567</div>          
                <div class="address">
                <div class="icon-rost">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-point.png" alt="Logo">
                Västra Trädgårdsgatan 53, 611 32 Nyköping</div>
            </div>
            </div>
          
        </div>
        <div class="links">
            <div class="button-rost">view menu</div>
            <div class="button-rost">book your table</div>
        </div>
    </div>
</div>


<section style="padding-bottom:0;" class="relative h-[1120px] mt-[-101px] flex flex-col">
    <div class="cover-div"></div>
    <div class="gradient-hero"></div>
    <!-- <img class="absolute top-0 left-0 w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/rosteriet-bg.png" alt="Logo"> -->
<iframe class="absolute top-[-165px] left-0 w-full h-full object-cover" 
        src="https://www.youtube.com/embed/aJwdWeiSc8c?autoplay=1&mute=1&loop=1&playlist=aJwdWeiSc8c&controls=0&showinfo=0&modestbranding=1" 
        frameborder="0" 
        allowfullscreen>
</iframe>
   <div class="page-width flex-1 flex flex-col h-full">
        <div class="hero flex flex-col items-center justify-end flex-1">
            <div class="absolute top-[30%]  z-10">
                <p class="text-white z-10 text-center mb-4 text-3xl">Rosteriet Nyköping</p>
                <h1 class=" text-center text-[#ebe090] z-10 max-w-[700px]">FIKA <span class="">&</span> ATMOSFÄR I HJÄRTAT AV NYKÖPING</h1>
            </div>
            <div class="open-time z-10 flex flex-col gap-4">
            <p class="text-white z-10 text-center text-3xl">Öppettider</p>
            <div class="hours flex flex-row gap-8 text-2xl mb-4">
                <div class="single-hour">
                    <div class="day">Måndag</div>
                    <div class="time">Stängt</div>
                </div>
                <div class="single-hour">
                    <div class="day">Tisdag - fredag</div>
                    <div class="time">10:00 - 19:00</div>
                </div>
                <div class="single-hour">
                    <div class="day">Lördag</div>
                    <div class="time">10:00 - 16:00</div>
                </div>
                <div class="single-hour">
                    <div class="day">Söndag</div>
                    <div class="time">11:00 - 15:00</div>
                </div>
            </div>
            <a class="button-rost z-10 w-max mx-auto text-xl " href="">Hitta hit</a>
        </div>
        </div>
    </div>
</section>


<section style="padding-top:12rem; min-height: 100vh" class="bg-[#1c1c1c] flex">
    <div class="page-width h-auto flex">
        <div class="flex gap-8">
           
            <div class="grow max-w-[50%] flex flex-col gap-8 justify-center text-xl">
                <div>
                     <h2 class="text-4xl">Ett café med det lilla extra</h2>
                </div>
                <p>Vi serverar och säljer med stolthet vårt färskrostade kvalitetskaffe och erbjuder i dagsläget 4 signatur-blandningar och alltid ett par olika single origin-kaffen som skiftar över tid.

                </p>
                <p >Kaffemenyn innehåller alla varianter av kaffedrycker du kan tänka dig och vi har utrustat vår kaffebar med maskiner från bl.a. Mahlkönig och Victoria Arduino för att kunna leverera en minst sagt förstklassig kaffeupplevelse.</p>
                <a class="button-rost w-max text-xl" href="">View menu</a>
            </div>
            <div class="max-w-[50%] grow relative h-auto">
                <div class="absolute bottom-10.5 right-18.5 h-full w-[60%] border-2 border-solid border-[#ebe090]"></div>
                <img class="object-contain absolute top-0 left-0 h-full w-full"  src="<?php echo get_template_directory_uri(); ?>/assets/images/stendorren.png" alt="business-image">
            </div> 
        </div>
    </div>
</section>


<section style="padding-top:12rem; min-height: 80vh" class="bg-[#1c1c1c] flex relative">
    <div class="gradient-cta"></div>
    <div class="gradient-cta-two"></div>
    <img class="absolute left-0 top-0 h-full object-contain z-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/chok-liten.jpg" alt="Logo">
    <div class="page-width h-auto flex z-10">
        <div class="flex gap-8 flex-col items-center w-full">
           
            <h2 style="font-size:60px" class="text-8xl">Välkommen till Rosteriet Nyköping</h2>
            <div class="contact flex gap-8 flex-row">
                <!-- Contact Info Section -->
                <div class="icon-rost flex items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/telephone.png" alt="Phone Icon" class="mr-2">
                    <span>1234567</span>
                </div>

                <div class="icon-rost flex items-center">  
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-point.png" alt="Map Icon" class="mr-2">
                    <span>Västra Trädgårdsgatan 53, 611 32 Nyköping</span>
                </div>
   
            </div>
            <a class="button-rost z-10 w-max mx-auto text-2xl " href="">Hitta hit</a>
        </div>
    </div>
</section>


<?php
get_footer(); // Include the footer
?>
