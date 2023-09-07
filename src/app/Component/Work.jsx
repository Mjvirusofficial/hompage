import React from 'react'
import Image from 'next/image'
import './CSS/Work.css'
import line from '../image/Line 1.png'
import work2 from '../image/work2.png'

function Work() {
    return (
        <div>
            <div className="work">
                <p className='text-center'>Work</p>
                <div className="place-content-center">
                    <div class=" flex items-center justify-center">
                        <Image alt='img' className='' src={line} />
                    </div>
                </div>

            </div>
            <div className="reel">

                <p className=''>A reel of hits, not misses—each an award-winner<br/>and each uniquely crafted for a roster of premier clients.</p>
            </div>

            <div class="w-full h-auto text-center">
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={work2} />

        {/* <img class="w-full max-w-screen-lg mx-auto" src="your-image.jpg" alt="Your Image Description"/> */}
    </div>

        </div>

        
    )
}

export default Work