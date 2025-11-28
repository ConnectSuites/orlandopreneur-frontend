@extends('layout.app')

@section('title', 'Membership')

@section('content')

<div class="w-full h-full bg-cover bg-center bg-no-repeat"  style="background-image: url('{{ asset('storage/images/home/background.png') }}');">

    <div class="relative flex flex-col">
        <img src="{{ asset('storage/images/membership/membership_1.png') }}" class="w-full"/>
            
        <!-- Overlay gradient -->
        <div class="absolute inset-0 bg-gradient-to-r from-purple-800/70 from-[34%] to-cyan-300/70"></div>
         <div class="absolute inset-0 flex flex-col items-center justify-center">
            <div class="text-white text-5xl font-normal font-['Poppins'] capitalize">Join the Tribe, Become an OrlandoPreneur </div>
            <div class="text-white text-3xl font-normal font-['Poppins'] capitalize">This isn’t just a membership. It’s a movement.</div>
        </div>
    </div>

     <div class="flex flex-col justify center items-center py-8 bg-violet-950">
           <div>
             <p class="h-20 text-white text-Miscellaneous-Segmented-Control---Selected-Fill text-4xl font-bold font-['Montserrat'] leading-[58px] ">What kind of impact are you hoping to make?</p>
           </div>
           <div>
            <p class="h-14 text-white text-xl font-normal font-['Montserrat'] leading-9">Use this Short form and we’ll suggest the best sponsorship fit for your goals</p>
           </div>
           <div class="grid grid-cols-3 gap-4">
                <div class="flex flex-col">
                    <div>
                         <p class="w-40 h-14 justify-center text-primary-2-Color text-xl font-semibold font-['Montserrat'] leading-9">Primary Goal</p>
                    </div>
                    <div>
                         <select class="w-full px-4 py-2.5 rounded-xl bg-white shadow-sm border border-gray-200 text-gray-700 focus:ring-2 focus:ring-indigo-300 focus:border-indigo-400">
                        <option>Build local visibility</option>
                        </select>
                    </div>   
                </div>
                 <div class="flex flex-col">
                    <div>
                         <p class="w-40 h-14 justify-center text-primary-2-Color text-xl font-semibold font-['Montserrat'] leading-9">Audience Focus</p>
                    </div>
                    <div>
                         <select class="w-full px-4 py-2.5 rounded-xl bg-white shadow-sm border border-gray-200 text-gray-700 focus:ring-2 focus:ring-indigo-300 focus:border-indigo-400">
                        <option>Small businesses</option>
                        </select>
                    </div>   
                </div>
                 <div class="flex flex-col">
                    <div>
                         <p  class="w-40 h-14 justify-center text-primary-2-Color text-xl font-semibold font-['Montserrat'] leading-9">Engagement Style</p>
                    </div>
                    <div>
                         <select class="w-full px-4 py-2.5 rounded-xl bg-white shadow-sm border border-gray-200 text-gray-700 focus:ring-2 focus:ring-indigo-300 focus:border-indigo-400">
                        <option>Light presence at events</option>
                        </select>
                    </div>   
                </div>
           </div>
           
            <div class="px-6 py-4 mt-8 bg-white rounded-[10px] inline-flex justify-center items-center gap-2.5">
                <button class="text-center text-Miscellaneous-Segmented-Control---Selected-Fill text-xl font-semibold font-['Poppins']">
                Show my Matches
                </button>
                </div>

    
    </div>

    <div class="w-full flex  py-8 justify-center items-center">
        <div class="w-[1389px] h-[1328px]  py-4 flex flex-col justify-center items-center relative bg-indigo-950/40 rounded-2xl border border-white/60">
            <p class="w-[748px] h-20 text-cyan-300 text-4xl font-bold font-['Montserrat'] leading-9">Choose your Sponsorship Package</p>
            <div class="w-[872px] h-14 text-center justify-center text-white text-xl font-normal font-['Montserrat'] leading-9">Flexible options for every partner from one-time events to year-round visibility.</div>
            <div class="grid grid-cols-2 gap-4">
                
                <div class="w-[469px] h-[473px]  px-8 py-8 relative bg-white rounded-2xl outline outline-1 outline-offset-[-1px] outline-yellow-400/10 backdrop-blur-[5px]">
                    <div class="flex flex-row  justify-between items-center">
                        <div class="w-24 h-7 justify-start relative bg-cyan-400/25 rounded-full mb-5 flex flex-row">
                            <div class="w-16 h-4 left-[12px] top-[5px] absolute justify-center text-black text-sm font-normal font-['Montserrat'] leading-5">Choose</div>
                        </div>
                        <div >
                            <img src="{{ asset('storage/images/membership/monthly.png') }}" class=""/>
                        </div>
                    </div>
                   
                    <div class="w-56 h-8 text-zinc-950 text-2xl font-bold font-['Poppins'] leading-8">Seed Sponsor</div>
                    <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-purple-600/30 rounded-full"></div>
                    <div class="w-80 mb-10 h-32 justify-center text-black text-base font-normal font-['Montserrat'] leading-8">Sponsor table at the event<br/>Logo in slides + one social post<br/>Newsletter mention<br/>Event listed on site<br/>Two drink tickets</div>
                    <div class="w-40 h-8 text-cyan-400 text-2xl font-bold font-['Montserrat'] leading-8">$300 per event</div>
                    <div class="w-96 mt-4 h-12 relative bg-gradient-to-r from-cyan-300 to-purple-800 rounded-lg overflow-hidden">
                    <button class="w-44 h-5 left-[112.27px] top-[15px] absolute text-center justify-center text-white text-base font-normal font-['Montserrat'] leading-6">Add to Cart</button>
                    </div>
                </div> 

                 <div class="w-[469px] h-[473px]  px-8 py-8 relative bg-white rounded-2xl outline outline-1 outline-offset-[-1px] outline-yellow-400/10 backdrop-blur-[5px]">
                    <div class="flex flex-row  justify-between items-center">
                        <div class="w-24 h-7 justify-start relative bg-cyan-400/25 rounded-full mb-5 flex flex-row">
                            <div class="w-16 h-4 left-[12px] top-[5px] absolute justify-center text-black text-sm font-normal font-['Montserrat'] leading-5">Choose</div>
                        </div>
                        <div >
                            <img src="{{ asset('storage/images/membership/monthly.png') }}" class=""/>
                        </div>
                    </div>
                   
                    <div class="w-56 h-8 text-zinc-950 text-2xl font-bold font-['Poppins'] leading-8">Growth Sponsor</div>
                    <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-purple-600/30 rounded-full"></div>
                    <div class="w-96 h-40 justify-center"><span class="text-black text-base font-semibold font-['Montserrat'] leading-8">Everything in Seed, plus:<br/></span><span class="text-black text-base font-normal font-['Montserrat'] leading-8">Engagement spotlight<br/>1hr pitch mentoring with Founder<br/>Priority future placement<br/>Two more drink tickets</span></div>
                    <div class="w-40 h-8 text-cyan-400 text-2xl font-bold font-['Montserrat'] leading-8">$500 per event</div>
                    <div class="w-96 mt-4 h-12 relative bg-gradient-to-r from-cyan-300 to-purple-800 rounded-lg overflow-hidden">
                    <button class="w-44 h-5 left-[112.27px] top-[15px] absolute text-center justify-center text-white text-base font-normal font-['Montserrat'] leading-6">Add to Cart</button>
                    </div>
                </div> 
            </div>
             <div class="grid grid-cols-2 gap-4 mt-4">
                
                <div class="w-[469px] h-[473px]  px-8 py-8 relative bg-white rounded-2xl outline outline-1 outline-offset-[-1px] outline-yellow-400/10 backdrop-blur-[5px]">
                    <div class="flex flex-row  justify-between items-center">
                        <div class="w-24 h-7 justify-start relative bg-cyan-400/25 rounded-full mb-5 flex flex-row">
                            <div class="w-16 h-4 left-[12px] top-[5px] absolute justify-center text-black text-sm font-normal font-['Montserrat'] leading-5">Choose</div>
                        </div>
                        <div >
                            <img src="{{ asset('storage/images/membership/monthly.png') }}" class=""/>
                        </div>
                    </div>
                   
                    <div class="w-56 h-8 text-zinc-950 text-2xl font-bold font-['Poppins'] leading-8">Scale Sponsor</div>
                    <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-purple-600/30 rounded-full"></div>
                    <div class="w-80 h-36justify-center "><span class="text-black text-base font-semibold font-['Montserrat'] leading-8">Everything in Growth, plus:<br/></span><span class="text-black text-base font-normal font-['Montserrat'] leading-8">15-min stage segment<br/>2hrs pitch mentoring<br/>Cross-channel recognition<br/>Four more drink tickets<br/></span></div>
                    <div class="w-full  h-8 text-cyan-400 text-2xl font-bold font-['Montserrat'] leading-8">$1,000 per event</div>
                    <div class="w-96 mt-4 h-12 relative bg-gradient-to-r from-cyan-300 to-purple-800 rounded-lg overflow-hidden">
                    <button class="w-44 h-5 left-[112.27px] top-[15px] absolute text-center justify-center text-white text-base font-normal font-['Montserrat'] leading-6">Add to Cart</button>
                    </div>
                </div> 

                 <div class="w-[469px] h-[473px]  px-8 py-8 relative bg-white rounded-2xl outline outline-1 outline-offset-[-1px] outline-yellow-400/10 backdrop-blur-[5px]">
                    <div class="flex flex-row  justify-between items-center">
                        <div class="w-24 h-7 justify-start relative bg-cyan-400/25 rounded-full mb-5 flex flex-row">
                            <div class="w-16 h-4 left-[12px] top-[5px] absolute justify-center text-black text-sm font-normal font-['Montserrat'] leading-5">Choose</div>
                        </div>
                        <div >
                            <img src="{{ asset('storage/images/membership/monthly.png') }}" class=""/>
                        </div>
                    </div>
                   
                    <div class="w-56 h-8 text-zinc-950 text-2xl font-bold font-['Poppins'] leading-8">Annual Sponsor</div>
                    <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-purple-600/30 rounded-full"></div>
                    <div class="w-96 h-40 justify-center text-black text-base font-normal font-['Montserrat'] leading-8">Monthly Seed or Growth benefits<br/>2 months free<br/>OrlandoPreneur membership<br/>Access to Event Calendar<br/>Direct messaging access</div>
                    <div class="w-40 h-8 text-cyan-400 text-2xl font-bold font-['Montserrat'] leading-8">$3,000-$5,000/year</div>
                    <div class="w-96 mt-4 h-12 relative bg-gradient-to-r from-cyan-300 to-purple-800 rounded-lg overflow-hidden">
                    <button class="w-44 h-5 left-[112.27px] top-[15px] absolute text-center justify-center text-white text-base font-normal font-['Montserrat'] leading-6">Add to Cart</button>
                    </div>
                </div> 
            </div>
        </div>
        
    </div>

            <div class="flex flex-col  items-center justify-center">
                <div class="w-[1389px] h-full mb-8 bg-white rounded-2xl  flex flex-col px-5 py-8">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                        <p class="w-[709px] left-[-16px] top-[-17px] justify-start text-cyan-300 text-5xl font-bold font-['Montserrat'] leading-[60px]">Go beyond logo placement</p>
                        <p class="w-[889px] h-20 left-[-16px] top-[57px] justify-start text-Miscellaneous-Window-Grabber text-2xl font-medium font-['Montserrat'] leading-9">Extend your impact inside the OrlandoPreneur app and community channels.</p>
                        <div class="w-[851px] h-56 justify-center text-neutral-900 text-xl font-normal font-['Montserrat'] leading-10">Community Partner – always-on presence with profile, offer & booking link<br/>Channel Partner – your tutorials, tools & exclusive offers<br/>Event Sponsor Enhancements – sponsored calendar highlights, RSVP prompts<br/>Newsletter Features – sponsored columns or expert pieces<br/>Custom Notifications – timed announcements to targeted segments</div>  
                <div class="w-72 h-14 relative rounded-[10px] shadow-[10px_6px_33px_0px_rgba(84,215,255,0.58)]">
        <div class="w-72 px-6 py-3.5 left-0 top-0 absolute bg-gradient-to-r from-cyan-300 to-purple-800 rounded-[10px] inline-flex justify-start items-start gap-2.5">
            <button class="text-center justify-center text-Miscellaneous-Segmented-Control---Selected-Fill text-xl font-semibold font-['Poppins']">Explore In-App Add-Ons</button>
        </div>
        </div>
                        </div>

                        <div class="flex justify-center items-center">
            <div class="relative w-72 h-[420px] flex justify-center items-center">

                <!-- Gradient Frame -->
                <div class="absolute inset-0 rounded-[999px] p-2
                    bg-gradient-to-b from-cyan-300 to-purple-300">
                </div>

                <!-- Image inside white container -->
                <div class="absolute inset-0 m-2 rounded-[999px] overflow-hidden bg-white">
                    <img 
                        src="{{ asset('storage/images/membership/event.png') }}"
                        class="w-full h-full object-cover"
                    >
                </div>

            </div>
        </div>

                    </div>
                
                

                    
                </div>

    </div>

    <div class="flex flex-row  bg-zinc-300/5 items-center px-20 py-8">
        <div class="flex flex-col">
            <div>
            <p class="w-[951px] h-40 justify-center"><span class="text-cyan-300 text-3xl font-semibold font-['Montserrat'] leading-9">Ready to make your mark in Orlando?<br></span><span class="text-white text-3xl font-normal font-['Montserrat'] leading-[8px]"></span><span class="text-white text-3xl font-semibold font-['Montserrat'] leading-[49px]">Let’s tailor a partnership that fits your goals</span></p>
            </div>
            <div class="w-64 h-12 relative bg-gradient-to-r from-cyan-300 to-purple-800 rounded-lg outline outline-1 outline-offset-[-1px] overflow-hidden">
                <div class="w-72 h-5 left-[-17px] top-[15px] absolute text-center justify-center text-white text-base font-semibold font-['Montserrat'] leading-9">Talk to Us</div>
            </div>
        </div>
        <div class="flex justify-start">
             <img src="{{ asset('storage/images/sponsorship/sponsorship_1.png') }}" class="w-full"/>

        </div>
    </div>

</div>
@endsection