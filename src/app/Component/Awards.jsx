import React from 'react'
import Image from 'next/image'
import './CSS/Work.css'
import awards from '../image/award.png'
import line from '../image/bl.png'

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

            <div className="w-full h-auto text-center">
            <Image alt='img' className='w-full max-w-screen-lg mx-auto' src={awards} />

    </div>

        </div>

        
    )
}

export default Awards