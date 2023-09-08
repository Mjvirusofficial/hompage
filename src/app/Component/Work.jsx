import React from 'react'
import Image from 'next/image'
import './CSS/Work.css'
import line from '../image/bl.png'
import work2 from '../image/work2.png'
import bmw from '../image/figmapic/bmw.png'
import png from '../image/figmapic/png.png'
import bp from '../image/figmapic/bp.png'
import ricoh from '../image/figmapic/ricoh.png'
import app from '../image/figmapic/apple.png'
import colg from '../image/figmapic/colgate.png'
import scuba from '../image/figmapic/scuba.png'
import cisi from '../image/figmapic/cision.png'
import chase from '../image/figmapic/chase.png'







function Work() {
    return (
        <div>
            <div className="work">
                <p className='text-center'>Work</p>
                <div className="place-content-center">
                    <div className=" flex items-center justify-center">
                        <Image alt='img' className='' src={line} />
                    </div>
                </div>

            </div>
            <div className="reel">
                <p>A reel of hits, not misses—each an award-winner<br />and each uniquely crafted for a roster of premier clients.</p>
            </div>


            <div class="m-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4">
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={bmw} />
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={png} />
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={bp} />

            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={ricoh} />
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={app} />
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={colg} />

            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={scuba} />
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={cisi} />
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={chase} />
            </div>





            {/* 
            <div className="w-full h-auto text-center">
                <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={work2} />

            </div> */}

        </div>


    )
}

export default Work