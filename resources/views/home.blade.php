@extends('layout.app')

@section('title', 'Home')

@section('content')

  
  <div class="w-full h-full  mx-auto overflow-hidden">

    <div class="relative w-full h-[80vh] min-h-[500px] overflow-hidden pt-20">
    <!-- Video -->
    <video 
        autoplay 
        muted 
        loop 
        playsinline 
        class="absolute inset-0 w-full h-full object-cover"
    >
        <source src="{{ asset('storage/videos/OrlandoPreneur.mp4') }}" type="video/mp4">
    </video>

    <!-- Overlay (biar konten lebih jelas) -->
    <div class="absolute inset-0 bg-black/30"></div>

    <!-- Content -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold drop-shadow-lg">OrlandoPreneur</h1>
        <p class="mt-4 text-lg md:text-2xl max-w-2xl drop-shadow-md">
            Empowering Entrepreneurs in Orlando
        </p>
    </div>
</div>

  

  
  <div class="relative  bg-gradient-to-r from-purple-800 to-cyan-300">

    <!-- Background Image -->
    <img 
        class="z-0 opacity-60 object-cover"
        src="{{ asset('storage/images/home/Mask_group.png') }}" 
    />

    <!-- Overlay Text Wrapper -->
    <div class="absolute   mb-16 inset-0 flex flex-col items-center justify-center z-10 text-center space-y-6">

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
        <div >
        <button 
            class="px-8 py-3 text-xl font-semibold font-['Poppins'] text-white 
                   bg-gradient-to-r from-cyan-300 to-purple-800 
                   rounded-[10px] shadow-[10px_6px_33px_rgba(84,215,255,0.58)]">
            Become a Member
        </button>
        </div>
    </div>
  </div>

    <div class="w-full flex flex-col items-center bg-gradient-to-r from-[#0b0f3f] to-[#1a1f7a]
  justify-center mx-auto px-8 py-12"> 
      <div>
        <span class="text-cyan-300 text-3xl font-semibold font-['Montserrat'] capitalize leading-10">Join OrlandoPreneur™ Today</span>
      </div> 
      <div>     
         <span class="text-Miscellaneous-Segmented-Control---Selected-Fill text-3xl font-semibold font-['Montserrat'] capitalize leading-10"></span>
        
        </div>
        <div>
        <span class=" text-white text-Miscellaneous-Segmented-Control---Selected-Fill text-2xl font-semibold font-['Montserrat'] capitalize leading-9">Your all-access pass to Orlando’s most connected business community.<br/>
        </span>
          </div>
          
            <span class=" text-white text-Miscellaneous-Segmented-Control---Selected-Fill text-xl font-semibold font-['Montserrat'] capitalize leading-9">Create Impact, Build Together, Ignite Ideas, Grow Orlando, Share Knowledge, Foster Growth, Drive Progress</span>
          </div>
    </div>

<div class="flex flex-col  items-center justify-center">
    <div>
      <img class="" src="{{ asset('storage/images/home/our_values.png') }}" />
      
    </div>
      <div class="mb-8 px-6 py-3.5 bg-gradient-to-r from-cyan-300 to-purple-800 rounded-[10px] inline-flex justify-start items-start gap-2.5">
        <button class="justify-center text-white text-xl font-semibold font-['Poppins']">Learn More About Membership Benefits</button>
        </div>
   
</div>


<div class="w-full flex flex-col bg-white px-16 py-8 ">
 
  <div > 
  <span class="text-cyan-300 text-5xl font-bold font-['Montserrat'] capitalize">Upcoming Events</span>
  </div>

    <div class="grid grid-cols-3 gap-4">
      <div class="flex flex-col mt-8 inline-block rounded-xl px-3 py-1 border">
        <div class="">
                <img class="w-full rounded-md" src="{{ asset('storage/images/home/upcoming-1.png') }}" />
        </div>
        <div class="grid grid-cols-[60px_1fr] gap-4 items-start mt-4">
            <div class="flex flex-col">
              <div class="text-cyan-400 text-xs font-bold font-['DM_Sans']">APR</div>
              <div>
                 <span class="text-black text-3xl font-bold font-['DM_Sans']">14</span>
              </div>
             
            </div>
            <div class="">
            
              <div><span class=" h-20 justify-start text-black text-base font-bold font-['DM_Sans'] leading-6">TiE Women: Pitch, Lead & Invest- Pitch Competition</span></div>
              <div><span class=" h-5 justify-start text-cyan-400 text-xs font-normal font-['DM_Sans'] leading-4">Networking | Workshop | Zoom | Conference</span></div>
              <div class=" h-11 justify-start text-neutral-500 text-sm font-normal font-['DM_Sans'] leading-5">We’ll get you directly seated and inside for you to enjoy the show.</div>
              <div class=" h-10 px-5 py-2.5 bg-gradient-to-r from-cyan-300 to-purple-800 rounded-md outline outline-[1.50px] outline-offset-[-1.50px] inline-flex justify-center items-center gap-2.5">
                <button class="justify-start text-white text-base font-medium font-['DM_Sans']">Join This Event</button>
              </div>
            </div>

        </div>
      </div>
      
      <div class="flex flex-col mt-8 inline-block rounded-xl px-3 py-1 border">
        <div class="">
                <img class="w-full rounded-md" src="{{ asset('storage/images/home/upcoming-2.png') }}" />
        </div>
        <div class="grid grid-cols-[60px_1fr] gap-4 items-start mt-4">
            <div class="flex flex-col">
              <div class="text-cyan-400 text-xs font-bold font-['DM_Sans']">APR</div>
              <div>
                 <span class="text-black text-3xl font-bold font-['DM_Sans']">14</span>
              </div>
             
            </div>
            <div class="">
            
              <div><span class=" h-20 justify-start text-black text-base font-bold font-['DM_Sans'] leading-6">TiE Women: Pitch, Lead & Invest- Pitch Competition</span></div>
              <div><span class=" h-5 justify-start text-cyan-400 text-xs font-normal font-['DM_Sans'] leading-4">Networking | Workshop | Zoom | Conference</span></div>
              <div class=" h-11 justify-start text-neutral-500 text-sm font-normal font-['DM_Sans'] leading-5">We’ll get you directly seated and inside for you to enjoy the show.</div>
              <div class=" h-10 px-5 py-2.5 bg-gradient-to-r from-cyan-300 to-purple-800 rounded-md outline outline-[1.50px] outline-offset-[-1.50px] inline-flex justify-center items-center gap-2.5">
                <button class="justify-start text-white text-base font-medium font-['DM_Sans']">Join This Event</button>
              </div>
            </div>

        </div>
      </div>

      <div class="flex flex-col mt-8 inline-block rounded-xl px-3 py-1 border">
        <div class="">
                <img class="w-full rounded-md" src="{{ asset('storage/images/home/upcoming-3.png') }}" />
        </div>
        <div class="grid grid-cols-[60px_1fr] gap-4 items-start mt-4">
            <div class="flex flex-col">
              <div class="text-cyan-400 text-xs font-bold font-['DM_Sans']">APR</div>
              <div>
                 <span class="text-black text-3xl font-bold font-['DM_Sans']">14</span>
              </div>
             
            </div>
            <div class="">
            
              <div><span class=" h-20 justify-start text-black text-base font-bold font-['DM_Sans'] leading-6">TiE Women: Pitch, Lead & Invest- Pitch Competition</span></div>
              <div><span class=" h-5 justify-start text-cyan-400 text-xs font-normal font-['DM_Sans'] leading-4">Networking | Workshop | Zoom | Conference</span></div>
              <div class=" h-11 justify-start text-neutral-500 text-sm font-normal font-['DM_Sans'] leading-5">We’ll get you directly seated and inside for you to enjoy the show.</div>
              <div class=" h-10 px-5 py-2.5 bg-gradient-to-r from-cyan-300 to-purple-800 rounded-md outline outline-[1.50px] outline-offset-[-1.50px] inline-flex justify-center items-center gap-2.5">
                <button class="justify-start text-white text-base font-medium font-['DM_Sans']">Join This Event</button>
              </div>
            </div>

        </div>
      </div>
      
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

     <div class="w-full   mb-20   flex flex-col bg-white  rounded-[40px] shadow-[0px_4px_6px_0px_rgba(0,0,0,0.25)] border-r-[1.50px] border-t-[1.50px] border-b-[1.50px] border-white">
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

       
          <div class="w-full h-[547px] relative">
  <img class="w-full" src="{{ asset('storage/images/home/sc.png')}}" />
  
</div>
        </div>
   
    
    </div>

      
</div>





<div class="w-full flex flex-col px-4 py-8  bg-white">
   <div class="text-cyan-300 text-5xl font-bold font-['Montserrat'] leading-[55px]">A Few of Our Sponsors... </div>
    <div><span class="text-Miscellaneous-Window-Grabber text-3xl font-medium font-['Montserrat'] leading-[55px]">Partner with Orlando’s largest small business community</span></div>
 <div class="md:grid md:grid-cols-4 md:gap-4 
            flex gap-4 overflow-x-auto snap-x snap-mandatory">

  <img src="{{ asset('storage/images/home/sponsor-3.png') }}"
       class="w-48 h-36 object-cover rounded-lg snap-center flex-shrink-0 md:w-full md:h-48" />
        
  <img src="{{ asset('storage/images/home/sponsor-2.png') }}"
       class="w-48 h-36 object-cover rounded-lg snap-center flex-shrink-0 md:w-full md:h-48" />

  <img src="{{ asset('storage/images/home/sponsor-3.png') }}"
       class="w-48 h-36 object-cover rounded-lg snap-center flex-shrink-0 md:w-full md:h-48" />

  <img src="{{ asset('storage/images/home/sponsor-4.png') }}"
       class="w-48 h-36 object-cover rounded-lg snap-center flex-shrink-0 md:w-full md:h-48" />

</div>
 
  
 
    <div class="flex justify-center mt-8">
  <button class="px-6 py-3.5 rounded-[10px] bg-gradient-to-r from-cyan-300 to-purple-800 text-white text-xl font-semibold font-['Poppins'] shadow-[10px_6px_33px_0px_rgba(84,215,255,0.58)]">
    Become a Sponsor →
  </button>
  </div>
  </div>
    


<div class="flex flex-col  px-9 py-5">
 
    <div class="mb-8">
      <p class="text-cyan-300 text-5xl font-bold font-['Montserrat'] leading-[55px]">Testimonials</p>
    </div>
    <div class="md:grid md:grid-cols-2 md:gap-2 
            flex gap-4 overflow-x-auto snap-x snap-mandatory mb-8">

      <div class="w-[625px]  h-80 flex flex-col py-4 px-4  bg-indigo-950 rounded-2xl shadow-[0px_0px_25px_0px_rgba(98,51,143,0.08)] border-b-4 border-cyan-300">
        <div class="absolute -mt-8 ">
           <img src="{{ asset('storage/images/home/testiquote.png') }}" class="w-8 h-8">
        </div>
        <div class="w-64 mt-4 text-white justify-start text-Miscellaneous-Segmented-Control---Selected-Fill text-xl font-semibold font-['Fira_Sans'] leading-6">Jeff Nischwitz</div>
        <div class="w-[571px] mt-6 text-white justify-start text-Labels---Vibrant---Controls-Tertiary-√ text-lg font-normal font-['Open_Sans'] leading-6">“Had a great time last night at the OrlandoPreneur event! OrlandoPreneur is the real deal and is facilitating the connection of mavericks and change makers. Bochner PLLC is thrilled to be a Sponsor of these gatherings.”</div>
        <div class="flex flex-row items-center justify-start mt-8 ">
          <div>
            <img src="{{ asset('storage/images/home/testi-pic.png') }}" class="">
          </div>
          <div class="ml-4">
            <span class="w-96 text-white justify-start text-Miscellaneous-Segmented-Control---Selected-Fill text-lg font-bold font-['Open_Sans'] leading-6">Partner & Director of Business Development, Bochner PLLC</span>
          </div>
        </div>
      </div>
       <div class="w-[625px]  h-80 flex flex-col py-4 px-4  bg-indigo-950 rounded-2xl shadow-[0px_0px_25px_0px_rgba(98,51,143,0.08)] border-b-4 border-cyan-300">
        <div class="absolute -mt-8 ">
           <img src="{{ asset('storage/images/home/testiquote.png') }}" class="w-8 h-8">
        </div>
        <div class="w-64 mt-4 text-white justify-start text-Miscellaneous-Segmented-Control---Selected-Fill text-xl font-semibold font-['Fira_Sans'] leading-6">Spencer Elliot</div>
        <div class="w-[571px] mt-6 text-white justify-start text-Labels---Vibrant---Controls-Tertiary-√ text-lg font-normal font-['Open_Sans'] leading-6">“Improving the opportunities and resources for founders is something we actively support, and be grateful for wonderful programming like that which is being delivered every month by OrlandoPreneur.”</div>
        <div class="flex flex-row items-center justify-start mt-8 ">
          <div>
            <img src="{{ asset('storage/images/home/testi-pic-2.png') }}" class="">
          </div>
          <div class="ml-4">
            <span class="w-96 text-white justify-start text-Miscellaneous-Segmented-Control---Selected-Fill text-lg font-bold font-['Open_Sans'] leading-6">GP/Founder, Future Funders VC; Dir, Smart Cities Orlando, Plug and Play Tech Center</span>
          </div>
        </div>
      </div>
      
</div>

    <div class="flex justify-center items-center">
     <div class="size- px-6 py-3.5 bg-gradient-to-r from-cyan-300 to-purple-800 rounded-[10px] inline-flex justify-start items-start gap-2.5">
      <button class="justify-center text-white text-xl font-semibold font-['Poppins']">See Why 4,000+ Entrepreneurs Trust OrlandoPreneur</button>
    </div>
    
</div>
    

<div class="w-full h-[632px] mb-10 bg-indigo-950 rounded-2xl mt-5 mx-auto flex justify-center">
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

