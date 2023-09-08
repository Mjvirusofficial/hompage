import React from 'react'
import Image from 'next/image'
import './CSS/Work.css'
import awards from '../image/award.png'
import line from '../image/bl.png'
import sum from '../image/figmapic/sumsung.png'
import bestfood from '../image/figmapic/best.png'
import gold from '../image/figmapic/gold.png'
import bestmobile from '../image/figmapic/bestmobile.png'
import people from '../image/figmapic/people.png'
import rgold from '../image/figmapic/rose.png'






function Awards() {
    return (
        <div>
            <div className="work">
                <p className='text-center'>Awards</p>
                <div className="place-content-center">
                    <div className=" flex items-center justify-center">
                        <Image alt='img' className='' src={line} />
                    </div>
                </div>

            </div>
            <div className="reel">

                <p className=''>Pixel-Perfect Praises: My digital craftsmanship<br></br>has scored both happy clients and shiny awards.</p>
            </div>

            <div class="m-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4">
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={sum} />
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={bestfood} />
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={gold} />

            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={rgold} />
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={bestmobile} />
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={people} />
            </div>

            {/* <div className="w-full h-auto text-center">
                <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={awards} />

            </div> */}

        </div>


    )
}

export default Awards