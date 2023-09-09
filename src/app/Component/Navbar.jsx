"use client"
// components/Navbar.js
import { useState } from 'react';
import Image from 'next/image';
import Link from 'next/link';
import lg1 from '../image/Fill-1.png'
import lg2 from '../image/Fill-4.png'
import lin from '../image/linkdln.png'
import dis from '../image/d.png'



// export default Navbar;



const Navbar = () => {
  const [isOpen, setIsOpen] = useState(false);
  const [disp, setDis] = useState();


  const toggleNavbar = () => {
    setIsOpen(!isOpen);
    setDis('visible')

    // setDis('hidden')
  };

  const hide = () => {
    setIsOpen(isOpen);
    setDis('hidden')

  }

  const see = () => {
    // setIsOpen(false);

    setIsOpen(!isOpen);
    
  }

  return (
    <nav className="mnav p-4">
      <div className=" container mx-auto">
        <div className="flex justify-between items-center">

          <Link className=' flex' href="/">
            {/* <p className=" font-bold text-xl">Your Logo</p> */}
            <Image style={{
              visibility: `${disp}`
            }} alt='img' src={lg1} height={'61.81px'} width={'361px'} />
            <Image style={{
              visibility: `${disp}`
            }} alt='img' src={lg2} height={'61.81px'} width={'361px'} />


            <div className="ld ml-5 logo2 flex justify-between items-center ">
              <Link style={{
                visibility: `${disp}`
              }} className='ml-3 flex justify-between items-center' href="/">
                <Image alt='img' src={lin} height={0.1} width={25} />

                <p className="ml-3 text-black mal">Linkedln</p>
              </Link>

              <Link style={{
                visibility: `${disp}`
              }} className='ml-3 flex justify-between items-center' href="/">
                <Image alt='img' src={dis} height={0.1} width={25} />

                <p className="ml-3 text-black mal">Disribble</p>
              </Link>
            </div>
          </Link>

          <div className=" md:hidden">
            <button
              onClick={see}
              className="text-white focus:outline-none"
            >
              {isOpen ? (

                <button
              onClick={toggleNavbar}

              className="text-white focus:outline-none"
            >
                <svg
                  className="text-black h-6 w-6 mr-6"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"

                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  ></path>
                </svg>

                </button>

              ) : (

                <button
                              onClick={hide}

              className="text-white focus:outline-none"
            >
                <svg
                  className="text-black h-8 w-8"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"

                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  ></path>
                </svg>
</button>

              )}




            </button>
          </div>
          <div
            className={`${isOpen ? 'block' : 'hidden'
              } md:flex md:space-x-4`}
          >


            <div class="responsivearea long mj  ">
              <div class="responsiveinner ">
                <div class="logomobile ">
                  <Link className='flex  flex justify-between items-center' href="/">
                    <Image alt='img' src={lg1} height={50} width={50} />
                    <Image alt='img' src={lg2} height={50} width={50} />
                  </Link>
                </div>
                <div class="mobiemenu ">
                  <div class="menu-menu-header-container">
                    <ul id="menu-menu-header" class="menu">
                      <li id="menu-item-26"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><Link
                          href="/">ABOUT</Link></li>
                      <li id="menu-item-29"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><Link
                          href="/work">WORK</Link></li>
                      <li id="menu-item-27"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><Link
                          href="/award">AWARDS</Link></li>
                      <li id="menu-item-28"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><Link
                          href="/contact">CONTACT</Link></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <Link href="/">
              <p className="vis text-black font-bold ">ABOUT</p>
            </Link>
            <Link href="/work">
              <p className="vis text-black font-bold ">WORKS</p>
            </Link>
            <Link href="/award">
              <p className="vis text-black font-bold">AWARDS</p>
            </Link>
            <Link href="/contact">
              <p className="vis text-black font-bold">CONTACT</p>
            </Link>
          </div>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;
