@extends('layout.app')

@section('title', 'Home')

@section('content')


  <div class="w-full bg-cover bg-center bg-no-repeat" 
     style="background-image: url('{{ asset('storage/images/home/background.png') }}');">

    <div>
    <img class="style="width:100%" src="{{ asset('storage/images/home/home_images_1.png') }}" />
    </div>
  

  
  <div class="relative w-full bg-gradient-to-r from-purple-800 to-cyan-300">

    <!-- Background Image -->
    <img 
        class="w-full z-0 opacity-60 object-cover"
        src="{{ asset('storage/images/home/Mask_group.png') }}" 
    />

    <!-- Overlay Text Wrapper -->
    <div class="absolute inset-0 flex flex-col items-center justify-center z-10 text-center space-y-6">

        <!-- Title -->
        <div class="text-white text-7xl font-bold font-['Poppins'] leading-[78.5px] tracking-widest">
            OrlandoPreneur™
        </div>

        <!-- Subtitle -->
        <div class="text-white text-3xl font-normal font-['Poppins']">
            Orlando’s #1 Startup and Small Business Community. <br/> 
            We Create Impact.
        </div>

        <!-- Button -->
        <button 
            class="px-8 py-3 text-xl font-semibold font-['Poppins'] text-white 
                   bg-gradient-to-r from-cyan-300 to-purple-800 
                   rounded-[10px] shadow-[10px_6px_33px_rgba(84,215,255,0.58)]">
            Become a Member
        </button>

    </div>


    <div class="w-[1913px] h-52 opacity-90 bg-linear-56 from-white/10 via-white/10 to-white/0 shadow-[0px_4px_6px_0px_rgba(0,0,0,0.25)] border-r-[1.50px] border-t-[1.50px] border-b-[1.50px]">
      <div class="w-full flex flex-col items-center text-center justify-center absolute">
        <span class="text-cyan-300 text-3xl font-semibold font-['Montserrat'] capitalize leading-10">Join OrlandoPreneur™ Today</span>

        <span class="text-Miscellaneous-Segmented-Control---Selected-Fill text-2xl font-semibold font-['Montserrat'] capitalize leading-9">Your all-access pass to Orlando’s most connected business community.<br/></span>
        <span class="text-Miscellaneous-Segmented-Control---Selected-Fill text-xl font-semibold font-['Montserrat'] capitalize leading-9">Create Impact, Build Together, Ignite Ideas, Grow Orlando, Share Knowledge, Foster Growth, Drive Progress</span>
      </div>
    </div>
</div>

<div class="w-full min-h-[1500px]  flex flex-col  items-center justify-center">
    <div>
      <img class="mt-5" src="{{ asset('storage/images/home/our_values.png') }}" />
    </div>

<div class="w-96 h-14  relative rounded-[10px] shadow-[10px_6px_33px_0px_rgba(84,215,255,0.58)]">
      <div class="size- px-6 py-3.5 left-0 top-0 absolute bg-gradient-to-r from-cyan-300 to-purple-800 rounded-[10px] inline-flex justify-start items-start gap-2.5">
        <div class="justify-center text-center text-white text-xl font-semibold font-['Poppins']">Learn More About Membership Benefits</div>
      </div>
    </div>
</div>


<div class="w-[1846px] h-[945px] relative">
  <div class="w-[1846px] h-[945px] left-0 top-0 absolute bg-white rounded-[40px] shadow-[0px_4px_6px_0px_rgba(0,0,0,0.25)] border-r-[1.50px] border-t-[1.50px] border-b-[1.50px] border-white"></div>
  <div class="w-96 h-20 left-[259px] top-[90px] absolute">
    <div class="left-0 top-[12px] absolute justify-center text-cyan-300 text-5xl font-bold font-['Montserrat'] capitalize">Upcoming Events</div>
  </div>
  <img class="w-96 h-80 left-[1198.72px] top-[236px] absolute rounded-tl-[18.95px] rounded-tr-[18.95px]" src="https://placehold.co/401x337" />
  <div class="w-96 h-64 left-[1599.41px] top-[825px] absolute origin-top-left rotate-180 bg-white rounded-tl-[18.95px] rounded-tr-[18.95px]"></div>
  <div class="w-64 h-5 left-[1282.41px] top-[646.18px] absolute justify-start text-cyan-400 text-xs font-normal font-['DM_Sans'] leading-4">Networking | Workshop | Zoom | Conference</div>
  <div class="w-72 h-20 left-[1282.88px] top-[594.43px] absolute justify-start text-black text-base font-bold font-['DM_Sans'] leading-6">TiE Women: Pitch, Lead & Invest- Pitch Competition</div>
  <div class="w-72 h-11 left-[1282.41px] top-[678.53px] absolute justify-start text-neutral-500 text-sm font-normal font-['DM_Sans'] leading-5">We’ll get you directly seated and inside for you to enjoy the show.</div>
  <div class="w-7 h-6 left-[1226.40px] top-[597.64px] absolute text-center justify-start text-cyan-400 text-xs font-bold font-['DM_Sans']">APR</div>
  <div class="w-8 h-16 left-[1225.30px] top-[616.92px] absolute justify-start text-black text-3xl font-bold font-['DM_Sans']">14</div>
  <div class="w-40 h-10 px-5 py-2.5 left-[1279.27px] top-[744.44px] absolute bg-gradient-to-r from-cyan-300 to-purple-800 rounded-md outline outline-[1.50px] outline-offset-[-1.50px] inline-flex justify-center items-center gap-2.5">
    <div class="justify-start text-white text-base font-medium font-['DM_Sans']">Join This Event</div>
  </div>
  <img class="w-96 h-80 left-[724.80px] top-[236px] absolute rounded-tl-[18.95px] rounded-tr-[18.95px]" src="https://placehold.co/401x337" />
  <div class="w-96 h-64 left-[1125.48px] top-[825px] absolute origin-top-left rotate-180 bg-white rounded-tl-[18.95px] rounded-tr-[18.95px]"></div>
  <div class="w-64 h-5 left-[808.49px] top-[646.18px] absolute justify-start text-cyan-400 text-xs font-normal font-['DM_Sans'] leading-4">Networking | Workshop | Zoom | Conference</div>
  <div class="w-72 h-20 left-[808.96px] top-[594.43px] absolute justify-start text-black text-base font-bold font-['DM_Sans'] leading-6">TiE Women: Pitch, Lead & Invest- Pitch Competition</div>
  <div class="w-72 h-11 left-[808.49px] top-[678.53px] absolute justify-start text-neutral-500 text-sm font-normal font-['DM_Sans'] leading-5">We’ll get you directly seated and inside for you to enjoy the show.</div>
  <div class="w-7 h-6 left-[752.48px] top-[597.64px] absolute text-center justify-start text-cyan-400 text-xs font-bold font-['DM_Sans']">APR</div>
  <div class="w-8 h-16 left-[751.38px] top-[616.92px] absolute justify-start text-black text-3xl font-bold font-['DM_Sans']">14</div>
  <div class="w-40 h-10 px-5 py-2.5 left-[805.35px] top-[744.44px] absolute bg-gradient-to-r from-cyan-300 to-purple-800 rounded-md outline outline-[1.50px] outline-offset-[-1.50px] inline-flex justify-center items-center gap-2.5">
    <div class="justify-start text-white text-base font-medium font-['DM_Sans']">Join This Event</div>
  </div>
  <img class="w-96 h-80 left-[259.25px] top-[236px] absolute rounded-tl-[18.95px] rounded-tr-[18.95px]" src="https://placehold.co/401x337" />
  <div class="w-96 h-64 left-[659.93px] top-[825px] absolute origin-top-left rotate-180 bg-white rounded-tl-[18.95px] rounded-tr-[18.95px]"></div>
  <div class="w-64 h-5 left-[342.94px] top-[646.18px] absolute justify-start text-cyan-400 text-xs font-normal font-['DM_Sans'] leading-4">Networking | Workshop | Zoom | Conference</div>
  <div class="w-72 h-20 left-[343.41px] top-[594.43px] absolute justify-start text-black text-base font-bold font-['DM_Sans'] leading-6">TiE Women: Pitch, Lead & Invest- Pitch Competition</div>
  <div class="w-72 h-11 left-[342.94px] top-[678.53px] absolute justify-start text-neutral-500 text-sm font-normal font-['DM_Sans'] leading-5">We’ll get you directly seated and inside for you to enjoy the show.</div>
  <div class="w-7 h-6 left-[286.93px] top-[597.64px] absolute text-center justify-start text-cyan-400 text-xs font-bold font-['DM_Sans']">APR</div>
  <div class="w-8 h-16 left-[285.82px] top-[616.92px] absolute justify-start text-black text-3xl font-bold font-['DM_Sans']">14</div>
  <div class="w-40 h-10 px-5 py-2.5 left-[339.80px] top-[744.44px] absolute bg-gradient-to-r from-cyan-300 to-purple-800 rounded-md outline outline-[1.50px] outline-offset-[-1.50px] inline-flex justify-center items-center gap-2.5">
    <div class="justify-start text-white text-base font-medium font-['DM_Sans']">Join This Event</div>
  </div>
</div>



<div class="w-full min-h-[800px] bg-no-repeat bg-top bg-contain flex flex-col items-center" style="background-image: url('{{ asset('storage/images/home/tech-bg2.svg') }}');">
      <img class="mt-5" src="{{ asset('storage/images/home/connection_1.png') }}" />
      <img class="mt-5" src="{{ asset('storage/images/home/connection_2.png') }}" />
      <div class="w-[450px] mt-10 mb-10 h-14 relative rounded-[10px] shadow-[10px_6px_33px_0px_rgba(84,215,255,0.58)]">
        <div class="size- px-6 py-3.5 left-0 top-0 absolute bg-gradient-to-r from-cyan-300 to-purple-800 rounded-[10px] inline-flex justify-start items-start gap-2.5">
          <div class="justify-center text-white text-xl font-semibold font-['Poppins']">Join the Community That Makes This Happen</div>
        </div>
      </div>

     <div class="w-[1384px] relative h-[856px] mb-20   flex flex-col bg-white  rounded-[40px] shadow-[0px_4px_6px_0px_rgba(0,0,0,0.25)] border-r-[1.50px] border-t-[1.50px] border-b-[1.50px] border-white">
            <div class="mt-8 mb-20 items-center text-center justify-center text-cyan-300 text-5xl font-bold font-['Montserrat'] capitalize">Never Miss Another Event Again<br/></div>

      <div class="grid grid-cols-2 gap-4">

        <div class="flex flex-col px-20">
          <div class="w-96 justify-center text-cyan-400 text-3xl font-semibold font-['Poppins'] leading-10">Unlock Every Event — Exclusive Access<br/></div>
          <div class="w-[467px] justify-center text-zinc-600 text-base font-normal font-['Open_Sans'] leading-6">Orlando’s most complete business calendar — all in one place.Find events, post your own, and stay connected to the people who matter most.</div>
          <div class="w-80 justify-center text-cyan-400 text-2xl font-semibold font-['Poppins'] leading-10">Get Full Access </div>
          <div class="flex flex-col items-center">
             <img class="mt-5" src="{{ asset('storage/images/home/group.png') }}" />

             <div class="w-52 h-12 relative bg-gradient-to-r from-cyan-300 to-purple-800 rounded-lg outline outline-1 outline-offset-[-1px] overflow-hidden">
              <div class="w-48 h-5 left-[3px] top-[15px] absolute text-center justify-center text-white text-base font-medium font-['Montserrat'] leading-6">Join Now</div>
            </div>
          </div>
        </div>

       
          <div class="w-[754.55px] h-[547px] relative">
  <img class="w-full" src="{{ asset('storage/images/home/sc.png')}}" />
  
</div>
        </div>
   
    
    </div>

      
</div>





<div class="w-full flex flex-col  bg-white relative">
  <div class="grid grid-cols-2 gap-4">
     <div class="left-0 top-0 text-center justify-start text-cyan-300 text-5xl font-bold font-['Montserrat'] leading-[55px]">A Few of Our Sponsors...
      <div class="w-[932px] h-14 relative">
  <div class="left-0 top-0   text-Miscellaneous-Window-Grabber text-3xl font-medium font-['Montserrat'] leading-[55px]">Partner with Orlando’s largest small business community</div>
</div>
     </div>
      <div class="flex justify-end items-center space-x-3">

    <!-- Prev Button -->
    <button 
        class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 
               text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition">
        &lt;
    </button>

    <!-- Next Button -->
    <button 
        class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 
               text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition">
        &gt;
    </button>

  </div>
  
  </div>  
  
 
    <!-- Wrapper Slide -->
    <div id="slider"
        class="flex overflow-x-scroll scroll-smooth no-scrollbar space-x-4 px-12 py-4">

      <!-- Slide 1 -->
      <div class="min-w-[300px] h-[200px] bg-gray-100 rounded-xl shadow overflow-hidden">
        <img src="image1.jpg" class="w-full h-full object-cover" />
      </div>

      <!-- Slide 2 -->
      <div class="min-w-[300px] h-[200px] bg-gray-100 rounded-xl shadow overflow-hidden">
        <img src="image2.jpg" class="w-full h-full object-cover" />
      </div>

      <!-- Slide 3 -->
      <div class="min-w-[300px] h-[200px] bg-gray-100 rounded-xl shadow overflow-hidden">
        <img src="image3.jpg" class="w-full h-full object-cover" />
      </div>

      <!-- Tambah slide lainnya -->
  </div>
    <div class="flex justify-center">
  <button class="px-6 py-3.5 rounded-[10px] bg-gradient-to-r from-cyan-300 to-purple-800 text-white text-xl font-semibold font-['Poppins'] shadow-[10px_6px_33px_0px_rgba(84,215,255,0.58)]">
    Become a Sponsor →
  </button>
</div>
</div>

<div class="flex flex-col  px-9 py-5">
   <div class="grid grid-cols-2 gap-4">
    <div>
      <p class="text-cyan-300 text-5xl font-bold font-['Montserrat'] leading-[55px]">Testimonials</p>
    </div>
     <div class="flex justify-end items-center space-x-3">

    <!-- Prev Button -->
    <button 
        class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 
               text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition">
        &lt;
    </button>

    <!-- Next Button -->
    <button 
        class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 
               text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition">
        &gt;
    </button>

  </div>
  
  </div>  
    <div>

    </div>
   </div>

       <!-- Wrapper Slide -->
    <div id="slider"
        class="flex overflow-x-scroll scroll-smooth no-scrollbar space-x-4 px-12 py-4">

      <!-- Slide 1 -->
      <div class="min-w-[300px] h-[200px] bg-gray-100 rounded-xl shadow overflow-hidden">
        <img src="image1.jpg" class="w-full h-full object-cover" />
      </div>

      <!-- Slide 2 -->
      <div class="min-w-[300px] h-[200px] bg-gray-100 rounded-xl shadow overflow-hidden">
        <img src="image2.jpg" class="w-full h-full object-cover" />
      </div>

      <!-- Slide 3 -->
      <div class="min-w-[300px] h-[200px] bg-gray-100 rounded-xl shadow overflow-hidden">
        <img src="image3.jpg" class="w-full h-full object-cover" />
      </div>

      <!-- Tambah slide lainnya -->
  </div>
  <div class="flex mt-5  justify-center">
 <div class="size- px-6 py-3.5 bg-gradient-to-r from-cyan-300 to-purple-800 rounded-[10px] inline-flex justify-center items-start gap-2.5">
  <div class="justify-center text-white text-xl font-semibold font-['Poppins']">See Why 4,000+ Entrepreneurs Trust OrlandoPreneur</div>
</div>
  </div>


<div class="w-[1389px] h-[632px] mb-10 bg-indigo-950 rounded-2xl mt-5 mx-auto flex justify-center">
  <div class="grid grid-cols-2 gap-4 px-16 mt-20 flex flex-col">
    <div>
    <div class="w-[696px] mb-10 justify-center text-white text-2xl font-bold font-['Montserrat'] leading-9">Membership Has Its Perks You’ve been to the <br/>events, now unlock the full experience.</div>
      <div class="w-[696px] mb-10  justify-center text-white text-xl font-normal font-['Montserrat'] leading-6">Community Access — Join 4,000+ local entrepreneurs.<br/><br/>The Badass Event Calendar — Find every business event in Orlando.<br/><br/>Workshops, Lunch & Learns, Podcasts — Learn directly from experts</div>
      <div class="w-[696.47px] mb-20   justify-center"><span class="text-white text-xl font-normal font-['Montserrat'] leading-9">Everything you need to grow Events. Experts. Real connections.Now </span><span class="text-white text-2xl font-bold font-['Montserrat'] leading-9">$15/month</span><span class="text-white text-xl font-normal font-['Montserrat'] leading-9"> — First Month Free.</span></div>
<div class="w-60 h-12 relative bg-gradient-to-r from-cyan-300 to-purple-800 rounded-lg outline outline-1 outline-offset-[-1px] overflow-hidden">
  <div class="w-48 h-5 left-[25px] top-[15px] absolute text-center justify-center text-white text-base font-medium font-['Montserrat'] leading-6">Become a Member</div>
</div>
    </div>
<!-- RIGHT COLUMN (IMAGE CENTERED) -->
    <div class="flex justify-center items-center mb-10">
      <div class="relative w-[320px] h-[320px] rounded-full bg-[#2f2f6d] p-4">
        <div class="absolute inset-0 rounded-full bg-gradient-to-br from-purple-700 to-indigo-900 p-3"></div>

        <img 
          src="{{ asset('storage/images/home/people.png') }}" 
          class="relative rounded-full w-full h-full object-cover"
        />
      </div>
    </div>
  
  
  </div>
</div>




</div> 





@endsection

