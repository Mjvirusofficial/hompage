import React from 'react'
import Image from 'next/image'
// import footer from '../image/Footer 39 (1).png'
import Link from 'next/link'
import lg1 from '../image/Fill-1.png'
import lg2 from '../image/Fill-4.png'
import f3 from '../image/f3.png'

function Footer() {
  return (
    <div className="">
      {/* <div className='container'>
     <div className=" flex justify-around items-center ">
      <div className="col ">
        <p>© 2023 Vasile.Design — Pixel Perfectionist</p>
      </div>

      <div className="mr-6 col2 flex">
      <Image src={lg1} height={'61.81px'} width={'361px'} />
      <Image src={lg2} height={'61.81px'} width={'361px'} />
      </div>

      <div className="col3">
      <Image src={f3} height={'61.81px'} width={'361px'} />

      </div>
     </div>
    </div>    */}

      <div class="grid grid-cols-3 gap-4 flex justify-between items-center ">
        <div class="md:ml-20 p-4">
        <p>© 2023 Vasile.Design — Pixel Perfectionist</p>
        </div>
        <div class="flex md:ml-20  p-4">
        <Image className='sm:ml-20'  src={lg1} height={'61.81px'} width={'361px'} />
        <Image src={lg2} height={'61.81px'} width={'361px'} />
        </div>
        <div class="md:ml-20 p-4">
        <Image src={f3} height={'61.81px'} width={'361px'} />
        </div>
      </div>


    </div>
  )
}

export default Footer