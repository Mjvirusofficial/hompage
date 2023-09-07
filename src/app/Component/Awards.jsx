import React from 'react'
import Image from 'next/image'
import './CSS/Work.css'
import line from '../image/Line 1.png'
import awards from '../image/award.png'

function Awards() {
    return (
        <div>
            <div className="work">
                <p className='text-center'>Awards</p>
                <div className="place-content-center">
                    <div class=" flex items-center justify-center">
                        <Image className='' src={line} />
                    </div>
                </div>

            </div>
            <div className="reel">

                <p className=''>Pixel-Perfect Praises: My digital craftsmanship<br></br>has scored both happy clients and shiny awards.</p>
            </div>

            <div class="w-full h-auto text-center">
            <Image className='w-full max-w-screen-lg mx-auto' src={awards} />

        {/* <img class="w-full max-w-screen-lg mx-auto" src="your-image.jpg" alt="Your Image Description"/> */}
    </div>

        </div>

        
    )
}

export default Awards