@extends('layout.app')

@section('title', 'About us')

@section('content')

<div class="w-full h-full bg-cover bg-center bg-no-repeat"  style="background-image: url('{{ asset('storage/images/home/background.png') }}');">
    
    <div class="flex flex-col bg-gradient-to-r from-purple-800/70 from-[34%] to-cyan-300/70">
        <div class="">
            <img src="{{ asset('storage/images/about-us/about-us-1.png') }}" class="w-full" />
        <div class="absolute inset-0 flex flex-col items-center justify-center space-y-4">
            <h1 class="text-7xl font-bold text-white tracking-widest capitalize">Who We Are
            </h1>
            <p class="text-center text-white text-3xl font-normal capitalize font-['Poppins']">
            Entrepreneurs Empowering Entrepreneurs
            </p>
        </div>
        </div>
    </div>
    <div class="flex items-center py-10 justify-center">
        <div class="relative py-10 px-5 bg-indigo-950 rounded-2xl">
           <div class="flex grid grid-cols-2">
            <div>
                <img src="{{ asset('storage/images/about-us/about-us-2.png') }}" class="w-full" />
            </div>
            <div class="flex px-10 w-100 flex-col items-center justify-center">
             <div class="text-cyan-300 text-3xl font-bold font-['Montserrat'] leading-9">“WE HAVE MET THE ENEMY AND HE IS US.” – Walt Kelly, via Pogo</div>
            <div class="text-white text-xl font-normal font-['Montserrat'] leading-9">Are you an entrepreneur, startup founder, or small business owner experiencing challenges? Of course you are. We ALL are!<br/>Don’t believe the “Groupthink”: that lack of money, having no market for your product or services, poor customer relations, etc. are CAUSING your failure.<br/>These issues, while significant, are not CAUSES of business failure they are SYMPTOMS.<br/>The ONLY TRUE CAUSE of failure in business is BAD MANAGEMENT (btw, that’s us)!<br/>Yeah, the Truth hurts.  <br/>As entrepreneurs, if the money runs out, if we’re not selling enough products or services to stay afloat, if poor reviews are killing us, WE caused that to happen!<br/>“THE BUCK STOPS HERE”.</div>
            </div>
           </div>
        </div>
    </div>

    <div class="flex flex-col bg-white py-8">
        <div>
             <p class="self-stretch text-center justify-start text-cyan-300 text-5xl font-bold font-['Montserrat'] leading-[60px]">OUR CORE VALUES</p>
        </div>

        <div class="grid grid-cols-5 px-5">
                <div class="flex flex-col items-start space-y-3 w-60">

            <!-- Kotak gradient hanya untuk icon -->
            <div class="w-32 h-32 bg-gradient-to-br from-cyan-300 to-purple-500 rounded-3xl flex items-center justify-center">
                <img src="{{ asset('storage/images/about-us/value_1.png') }}" class="w-16 h-16" />
            </div>

            <!-- Judul -->
            <h3 class="text-violet-950 text-2xl font-semibold font-['Poppins']">
                Entrepreneurship
            </h3>

            <!-- Deskripsi -->
            <p class="text-slate-700 text-base leading-6 font-['Poppins']">
                Entrepreneurs are those who have chosen a life that persistently tests
                their Creativity, Initiative, Resilience, and Risk Tolerance. You are
                not alone! We are here for you.
            </p>

        </div>

            
                       <div class="flex flex-col items-start space-y-3 w-60">

            <!-- Kotak gradient hanya untuk icon -->
            <div class="w-32 h-32 bg-gradient-to-br from-cyan-300 to-purple-500 rounded-3xl flex items-center justify-center">
                <img src="{{ asset('storage/images/about-us/value_2.png') }}" class="w-16 h-16" />
            </div>

            <!-- Judul -->
            <h3 class="text-violet-950 text-2xl font-semibold font-['Poppins']">
                Altruism
            </h3>

            <!-- Deskripsi -->
            <p class="text-slate-700 text-base leading-6 font-['Poppins']">
                To be blunt, if you’re <br/>not helping others, what good are you? If your business or business i
            </p>

        </div>
                    <div class="flex flex-col items-start space-y-3 w-60">

            <!-- Kotak gradient hanya untuk icon -->
            <div class="w-32 h-32 bg-gradient-to-br from-cyan-300 to-purple-500 rounded-3xl flex items-center justify-center">
                <img src="{{ asset('storage/images/about-us/value_3.png') }}" class="w-16 h-16" />
            </div>

            <!-- Judul -->
            <h3 class="text-violet-950 text-2xl font-semibold font-['Poppins']">
                Innovation
            </h3>

            <!-- Deskripsi -->
            <p class="text-slate-700 text-base leading-6 font-['Poppins']">
               Being innovative isn’t a catchphrase. It’s using your creativity in every single thing you do, to change the status quo, to make lives better, and create a legacy. Learn from us!
            </p>

        </div>
                    <div class="flex flex-col items-start space-y-3 w-60">

            <!-- Kotak gradient hanya untuk icon -->
            <div class="w-32 h-32 bg-gradient-to-br from-cyan-300 to-purple-500 rounded-3xl flex items-center justify-center">
                <img src="{{ asset('storage/images/about-us/value_4.png') }}" class="w-16 h-16" />
            </div>

            <!-- Judul -->
            <h3 class="text-violet-950 text-2xl font-semibold font-['Poppins']">
                Boldness
            </h3>

            <!-- Deskripsi -->
            <p class="text-slate-700 text-base leading-6 font-['Poppins']">
            We believe that if you don’t get what you want, you get what <br/>you deserve. We want change, and to challenge the status quo. Come along for <br/>the ride. Don't worry, <br/>we got you!
            </p>

        </div>
                    <div class="flex flex-col items-start space-y-3 w-60">

            <!-- Kotak gradient hanya untuk icon -->
            <div class="w-32 h-32 bg-gradient-to-br from-cyan-300 to-purple-500 rounded-3xl flex items-center justify-center">
                <img src="{{ asset('storage/images/about-us/value_5.png') }}" class="w-16 h-16" />
            </div>

            <!-- Judul -->
            <h3 class="text-violet-950 text-2xl font-semibold font-['Poppins']">
                Gratitude
            </h3>

            <!-- Deskripsi -->
            <p class="text-slate-700 text-base leading-6 font-['Poppins']">
               We entrepreneurs need all the help that we can get. Good thing that being grateful for everything in our lives brings more things for us to be grateful. Be grateful. We are.
            </p>

        </div>

        </div>

    </div>

    <div class="flex flex-cols py-10 px-5 justify-center">
            <div class="bg-violet-950 opacity-90 rounded-2xl">
                    <div class="px-5">
                        <p class="justify-center text-cyan-300 text-4xl font-bold font-['Montserrat'] leading-9">Our Social Pitch</p>
                    </div>
                    <div class="grid grid-cols-2 px-5 py-5 gap-8">
                        <div class="w-[585px]">
                            <span class="text-white text-xl font-normal font-['Montserrat'] leading-9">We are OrlandoPreneur, the #1 startup community in America’s #1 startup city (according to </span><span class="text-white text-xl font-normal font-['Montserrat'] underline leading-9">WalletHub</span><span class="text-white text-xl font-normal font-['Montserrat'] leading-9">, 4 of the last 5 years)!<br/>It hurts us to see entrepreneurs fail. And, when 95% do, it’s a monumental problem for us all.<br/>Our founder has founded and/or invested in dozens of startups, with multiple exits and failures, in multiple industries.<br/>By combining his passions for entrepreneurship and project management, his success rate is 12X the average!<br/>We don’t expect the Wall Street Journal to print about any of them, but when the entrepreneur, investors, and employees are happy, that’s what we call “success”! Everything doesn’t have to be a “unicorn”.<br/>Now consider this: EVERY material thing we buy, see, or touch – every part of your clothes, car, home, and stock portfolio – is provided by what was once a startup.<br/>So, essentially, our amazing world is built upon that 5% success rate!<br/><br/></span><span class="text-white text-xl font-semibold font-['Montserrat'] leading-9">Can you imagine what would happen to humanity if we just doubled it, to 10%?</span>
                        </div>
                        <div class="w-[575px] ">
                            <span class="justify-center text-white text-xl font-normal font-['Montserrat'] leading-9">
                                That’s still a 90% failure rate, though we would effectively double innovation and wealth in the world!<br/>That is our purpose, and why we’ve founded OrlandoPreneur.<br/>Every organization calls themselves a “hub” of something. Any mechanic will tell you that hubs just spin.<br/>At OrlandoPreneur, we use collaboration, networking, and education to add teeth to those hubs, and turn them into gears. Two gears make a machine. More gears make more powerful machines!<br/>We utilize our proprietary techniques to empower startup founders, service providers, and investors to create greater quantity (and quality!) of "investable" startups, and small businesses.<br/>In two years, we have garnered more than 3200 members, with upwards of 200 people attending our monthly networking and learning Startup Happy Hour events. They also give us 4.8 out of 5 stars!<br/>We have bold plans for the future. Those who join us will reap the benefits along the way.<br/>If you want to Connect – Learn – and Grow with us, join our tribe, today!
                            </span>
                        </div>
                    </div>
                 <div class="flex items-center justify-center py-5">
                    <div class="grid grid-cols-3 gap-2">
                        <div> <img src="{{ asset('storage/images/about-us/event-1.png') }}" class="w-96 h-80" />   </div>
                         <div class="w-96 h-80"> <img src="{{ asset('storage/images/about-us/event-2.png') }}" class="w-96 h-80"/>   </div>
                         <div class="w-96 h-80"> <img src="{{ asset('storage/images/about-us/event-3.png') }}" class="w-96 h-80"/>   </div>
                    </div>
                </div>
            </div>
    </div>

     <div class="flex flex-cols py-10 px-5 justify-center">
        <div class="bg-violet-950 opacity-90 rounded-2xl">
            <div class="grid grid-cols-2 gap-4 py-5 px-5">
                <div class="bg-white  w-[484px] flex flex-col py-5 px-5 rounded-2xl">
                    
                    <p class="justify-start text-cyan-300 text-4xl font-bold font-['Inter']">Is this you?</p>
                
                    <div class="justify-start"><span class="text-black text-xl font-light font-['Poppins']">Are you an entrepreneur, startup founder, or small business owner who is experiencing any of these issues?<br/><br/></span><span class="text-black text-xl font-light font-['Poppins']">Meeting like-minded people<br/>Cannot sleep, worrying about your business<br/>Your business is stagnant, or dying, and you don’t know why<br/>Finding, winning, and keeping customers<br/>Raising funding to get to the next level<br/>Hiring and/or retaining good employees<br/>Developing products and/or services customers want<br/></span><span class="text-black text-xl font-light font-['Poppins']"><br/>People who join us, attend our events, and make an effort to learn (and execute!) what we teach, feel a peace of mind they hadn't felt in years! A few people actually told us that!<br/><br/></span><span class="text-black text-xl font-semibold font-['Poppins']">JOIN US, and we’ll do our best to empower you to achieve your dreams!</span></div>
                </div>
                <div class="flex flex-col">
                    <div> <p class="w-[698px] h-14 justify-start text-cyan-300 text-4xl font-bold font-['Inter']">For Additional Information, Contact Us</p></div>
                 
                    <div class="grid grid-cols-2 gap-10">

    <div>
        <label class="text-white">First Name</label>
        <input class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm 
            focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 
            disabled:pointer-events-none dark:bg-white-900 dark:border-gray-700 
            dark:text-gray-400 dark:focus:ring-gray-600" type="text">
    </div>

    <div>
        <label class="text-white">Last Name</label>
        <input class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm 
            focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 
            disabled:pointer-events-none dark:bg-white-900 dark:border-gray-700 
            dark:text-gray-400 dark:focus:ring-gray-600" type="text">
    </div>

    <div>
        <label class="text-white">Email</label>
        <input class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm 
            focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 
            disabled:pointer-events-none dark:bg-white-900 dark:border-gray-700 
            dark:text-gray-400 dark:focus:ring-gray-600" type="text">
    </div>

    <div>
        <label class="text-white">Phone Number</label>
        <input class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm 
            focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 
            disabled:pointer-events-none dark:bg-white-900 dark:border-gray-700 
            dark:text-gray-400 dark:focus:ring-gray-600" type="text">
   

</div>
 </div>
    <div>
        <label class="text-white">message</label>
        <textarea class="py-3 px-4 block w-full h-32 border border-gray-200 rounded-lg text-sm 
            focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 
            disabled:pointer-events-none dark:bg-white-900 dark:border-gray-700 
            dark:text-gray-400 dark:focus:ring-gray-600" type="text"> </textarea>
    </div>

                    

                    
                    
                </div>
            </div>
        </div>

        
     </div>


</div>

@endsection
