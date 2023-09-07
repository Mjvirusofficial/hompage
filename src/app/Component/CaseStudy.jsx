import React from 'react'
import './CSS/CaseStudy.css'
import blue from '../image/more.png'
import Image from 'next/image';
import line from '../image/bl.png'
import study from '../image/study.png'
import green from '../image/img2.png'
import yellow from '../image/img3.png'


function CaseStudy() {
  return (
    <div>
      <h1 style={{
        marginTop:'50px'
      }} className='case text-center mt-13'>Case studies</h1>
      <div className="">
        <p className='fromP'>From Pixels to People: Showcasing My Holistic Design Approach.</p>
      </div>

      <div className=" flex flex-wrap">
        <div className=" w-full md:w-1/2 p-4">
          <div className=" p-4">
            <Image alt='img' className='mt-8 mb-12' src={blue} />
          </div>
        </div>


        <div className="  w-full md:w-1/2 p-4">
          <div className="layout1">
            <p className='ml-1 heycoll'>Heycollab</p>
            <p className='ml-1 text-bold'>SaaS</p>
            <Image alt='img' className=' mt-4' src={line} />
            <p className='ml-1 heypro '>Heycollab: A productivity powerhouse fine-tuned to transform tasks into triumphs. They sought my expertise to stand out in a crowded marketplace.</p>
            <Image alt='img' className='ml-1 mt-8 mb-12 cursor-pointer' src={study} />

          </div>
        </div>
      </div>


{/* 2nd */}
<div className=" flex flex-wrap">
        <div className=" w-full md:w-1/2 p-4">
          <div className=" p-4">
          <div className="layout1">
            <p className='ml-1 heycoll'>Halcyon</p>
            <p className='ml-1 text-bold'>Fintech</p>
            <Image alt='img' className=' mt-4' src={line} />
            <p className='ml-1 heypro '>Halcyon: A fintech innovator streamlining the financial realm. They enlisted my expertise to morph their platform into a real-time data dashboard, turning advisor metrics into revenue magic.</p>
            <Image alt='img' className='ml-1 mt-8 mb-12 cursor-pointer' src={study} />

          </div>
          </div>
        </div>


        <div className="  w-full md:w-1/2 p-4">
        <Image alt='img' className='mt-8 mb-12' src={green} />

        </div>

      </div>

{/* 3rd */}

<div className=" flex flex-wrap">
        <div className=" w-full md:w-1/2 p-4">
            <Image alt='img' className='mt-8 mb-12' src={yellow} />
        </div>


        <div className="w-full md:w-1/2 p-4">
          <div className="layout1">
            <p className='ml-1 heycoll'>Scholarships.com</p>
            <p className='ml-1 text-bold'>Education</p>
            <Image alt='img' className=' mt-4' src={line} />
            <p className='ml-1 heypro '>With a dated design and escalating bounce rates, Scholarhips.com turned to me for a comprehensive brand and website redesign aimed at improving user experience.</p>
            <Image alt='img' className='ml-1 mt-8 mb-12 cursor-pointer' src={study} />

          </div>
        </div>
      </div>

    </div>
  )
}

export default CaseStudy;