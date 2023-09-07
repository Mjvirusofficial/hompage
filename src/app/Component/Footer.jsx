import React from 'react'
import Image from 'next/image'
// import footer from '../image/Footer 39 (1).png'
import lg1 from '../image/Fill-1.png'
import lg2 from '../image/Fill-4.png'
import f3 from '../image/f3.png'

function Footer() {
  return (
    <div className="">
     

      <div className="grid grid-cols-3 gap-4 flex justify-between items-center ">
        <div className="md:ml-20 p-4 m1">
        <p>© 2023 Vasile.Design — Pixel Perfectionist</p>
        </div>
        <div className="flex md:ml-20  p-4">
        <Image alt='img' className='sm:ml-20'  src={lg1} height={'61.81px'} width={'361px'} />
        <Image alt='img' src={lg2} height={'61.81px'} width={'361px'} />
        </div>
        <div className="md:ml-20 p-4">
        <Image alt='img' src={f3} height={'61.81px'} width={'361px'} />
        </div>
      </div>


    </div>
  )
}

export default Footer