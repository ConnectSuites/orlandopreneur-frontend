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

    <div class="grid grid-cols-2 gap-8 px-10 py-10">
       <div class="relative">
    <!-- kotak belakang -->
    <div class="absolute bottom-[-40px] left-[-40px] 
                w-80 h-96 rounded-[10px]
                bg-gradient-to-r from-cyan-300 to-purple-800
                z-0">
    </div>

    <!-- gambar depan -->
    <img 
        src="{{ asset('storage/images/membership/membership_2.png') }}" 
        class="w-[543px] h-[724px] relative z-10"
    />
</div>

         <div>
            <p class="w-52 h-20 justify-center text-cyan-300 text-4xl font-bold font-['Montserrat'] leading-9">Why Join</p>          
            <p class="w-[633px] h-[521px] justify-center text-white text-xl font-normal font-['Montserrat'] leading-9">Being an entrepreneur is exciting but it can also be lonely. What makes the difference isn’t just hard work, it’s who you surround yourself with.<br/><br/>When you join OrlandoPreneur, you’re not just signing up for another group. You’re becoming part of something bigger. A real community that supports your goals and dreams, that celebrates your wins, and that stands with you through the challenges.<br/><br/>Here, you’ll work alongside people who want to see you succeed people who believe in your vision, your innovation, and your future.<br/><br/>That’s the power of a tribe. And that’s why we exist.</p>
        </div>


        <div class="w-[1389px] h-[465px] relative bg-white rounded-2xl mt-20 mb-20">
            <div class="grid grid-cols-2 py-10 px-10 gap-8">
                <div class="flex flex-col">
                    <div>
                      <p class=" text-cyan-300 text-5xl font-bold font-['Montserrat'] leading-[60px]">Membership Benefits</p>
                    </div>
                    <div>
                      <p class="text-Miscellaneous-Window-Grabber text-3xl font-medium font-['Montserrat'] leading-[123px]">As a member, you get:</p>
                    </div>
                    <div>
                      <p class=" text-neutral-900 text-xl font-normal font-['Montserrat'] leading-9">Free entry to our monthly Startup Happy Hour<br/>Access to Orlando’s most complete business events calendar<br/>Members-only directory to connect with founders, mentors, and investors<br/>Discounts on partner events and experiences<br/>Exclusive members-only workshops and gatherings<br/>A tribe that SHOWS UP and has your back</p>
                        </div>
                </div>

                <div class="flex items-center justify-center relative">
                    <div class="w-72 h-96 absolute opacity-30 bg-gradient-to-r from-cyan-300 to-purple-800 rounded-full"></div>
                    <div class="w-64 h-80 absolute bg-gradient-to-r from-cyan-300 to-purple-800 rounded-full"></div>
                    <div>
                           
                     <img src="{{ asset('storage/images/membership/loyalty-program.png') }}" class="size-44 relative "/>
                    </div>
                </div> 
            </div>


        </div>

        
          
    </div>

      <div class="flex flex-col bg-indigo-950/40 rounded-2xl border border-white/60 px-10 py-10 items-center justify-center">
            <div class="flex items-center justify-center">
                    <p class=" h-20 text-cyan-300 text-4xl font-bold font-['Montserrat'] leading-9">Membership Options</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="w-[469px] h-96 px-8 py-8 relative bg-white rounded-2xl outline outline-1 outline-offset-[-1px] outline-yellow-400/10 backdrop-blur-[5px]">
                    <div class="flex flex-row  justify-between items-center">
                        <div class="w-24 h-7 justify-start relative bg-cyan-400/25 rounded-full mb-5 flex flex-row">
                            <div class="w-16 h-4 left-[12px] top-[5px] absolute justify-center text-black text-sm font-normal font-['Montserrat'] leading-5">Platinum</div>
                        </div>
                        <div >
                            <img src="{{ asset('storage/images/membership/monthly.png') }}" class=""/>
                        </div>
                    </div>
                   
                    <div class="w-56 h-8 text-zinc-950 text-2xl font-bold font-['Poppins'] leading-8">Monthly</div>
                    <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-purple-600/30 rounded-full"></div>
                    <div class="w-20 h-4 mt-32 text-neutral-500 text-sm font-normal font-['Montserrat'] leading-5">Fee</div>
                    <div class="flex flex-row  justify-between items-center">
                        <div class="w-40 h-8 text-cyan-400 text-2xl font-bold font-['Montserrat'] leading-8">$30/month</div>
                        <div class="w-48 h-6 text-right text-neutral-500 text-base font-normal font-['Montserrat'] leading-6">cancel anytime</div>
                    </div>
                    <div class="w-96 mt-4 h-12 relative bg-gradient-to-r from-cyan-300 to-purple-800 rounded-lg overflow-hidden">
                        <button class="w-44 h-5 left-[112.27px] top-[15px] absolute text-center justify-center text-white text-base font-normal font-['Montserrat'] leading-6">JOIN THE TRIBE</button>
                    </div>
                </div> 
                 <div class="w-[469px] h-96 px-8 py-8 relative bg-white rounded-2xl outline outline-1 outline-offset-[-1px] outline-yellow-400/10 backdrop-blur-[5px]">
                    <div class="flex flex-row  justify-between items-center">
                        <div class="w-24 h-7 justify-start relative bg-cyan-400/25 rounded-full mb-5 flex flex-row">
                            <div class="w-16 h-4 left-[12px] top-[5px] absolute justify-center text-black text-sm font-normal font-['Montserrat'] leading-5">Platinum</div>
                        </div>
                        <div >
                            <img src="{{ asset('storage/images/membership/monthly.png') }}" class=""/>
                        </div>
                    </div>
                   
                    <div class="w-56 h-8 text-zinc-950 text-2xl font-bold font-['Poppins'] leading-8">Monthly</div>
                    <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-purple-600/30 rounded-full"></div>
                    <div class="w-20 h-4 mt-32 text-neutral-500 text-sm font-normal font-['Montserrat'] leading-5">Fee</div>
                    <div class="flex flex-row  justify-between items-center">
                        <div class="w-40 h-8 text-cyan-400 text-2xl font-bold font-['Montserrat'] leading-8">$30/month</div>
                        <div class="w-48 h-6 text-right text-neutral-500 text-base font-normal font-['Montserrat'] leading-6">cancel anytime</div>
                    </div>
                    <div class="w-96 mt-4 h-12 relative bg-gradient-to-r from-cyan-300 to-purple-800 rounded-lg overflow-hidden">
                        <button class="w-44 h-5 left-[112.27px] top-[15px] absolute text-center justify-center text-white text-base font-normal font-['Montserrat'] leading-6">JOIN THE TRIBE</button>
                    </div>
                </div> 
            </div>

    </div>



    <div class="w-full h-[685px] bg-zinc-300/5 flex justiy-center px-8 py-8">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <div class="w-[951px] h-[469px]"><span class="text-white text-xl font-normal font-['Montserrat'] leading-9">Now it’s time to JOIN and be part of the tribe creating impact the connections, <br/>the opportunities, and the support that only comes when you’re all in.<br/><br/></span><span class="text-white text-xl font-normal font-['Montserrat'] leading-9"><br/></span><span class="text-cyan-300 text-3xl font-semibold font-['Montserrat'] leading-9">This is YOUR tribe:<br/></span><span class="text-white text-3xl font-normal font-['Montserrat'] leading-[8px]"></span><span class="text-white text-3xl font-semibold font-['Montserrat'] leading-[49px]">Entrepreneurs • Small Business Owners • Investors <br/>• Students • Mentors • Innovators • Community Builders<br/></span><span class="text-white text-3xl font-normal font-['Montserrat'] leading-[49px]"><br/></span><span class="text-white text-xl font-normal font-['Montserrat'] leading-9"><br/>If you’re ready to step in, show up, and be a part of REAL IMPACT <br/>this is where you belong.</span></div>
                <div class="w-64 h-12 relative bg-gradient-to-r from-cyan-300 to-purple-800 rounded-lg outline outline-1 outline-offset-[-1px] overflow-hidden">
                    <button class="w-72 h-5 left-[-17px] top-[15px] absolute text-center justify-center text-white text-base font-medium font-['Montserrat'] leading-9">JOIN THE TRIBE TODAY</button>
                </div>
            </div>

            <div >
                    <img src="{{ asset('storage/images/membership/event.png') }}" class=""/>
            </div>

        </div>
    </div>

    
</div>

@endsection