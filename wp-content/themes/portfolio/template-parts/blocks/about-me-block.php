<?php

$counters = get_field('counter_repeater');
$button_text = get_field('counter_button_text');
?>


<section  class=" bg-light-gray mt-0 ">
    <div class="page-width relative">
        <div class=" p-16 z-0 relative">
        <div class="flex justify-around flex-col gap-16">
        
        <div class="flex flex-row gap-8 justify-between items-center">
            <div class="grow basis-0 flex gap-16 flex-row justify-center">
                <div>
                    <div class="flex gap-4 items-center ">
                        <div class="counter" data-target="50">0 </div><div class="text-4xl text-primary font-bold">+</div>
                    </div>
                    <div class="text-2xl font-medium text-center">Projects</div>
                </div>
                <div>
                    <div class="flex gap-4 items-center justify-center">
                        <div class="counter" data-target="4">0 </div><div class="text-4xl text-primary font-bold">+</div>
                    </div>
                    <div class="text-2xl font-medium text-center">Years experience</div>
                </div>
              
            </div>
            <div class="grow gap-4 basis-0 flex flex-col">
                <h3>About me</h3>
                <p >I'm an Italian web developer based in Sweden, passionate about creating effective solutions that are both functional and visually appealing.
                     <br>Since 2020, I’ve been refining my skills and working on digital projects that focus on clean design and seamless user experiences.
                    I’m always eager for new challenges and opportunities to collaborate.
                    <br><span class="text-bold"> Let’s create something great together!</span>
                </p>
            </div>
        </div>    
                    
        </div>
        </div>
    </div>
</section>