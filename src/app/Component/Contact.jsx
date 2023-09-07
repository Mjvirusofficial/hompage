import React from 'react'
import Image from 'next/image'
import './CSS/Work.css'
import line from '../image/Line 1.png'
import contact from '../image/w.png'
import send from '../image/s.png'
function Contact() {
  return (
    <>
      <div className="work">
        <p className='text-center'>Contact</p>
        <div className="place-content-center">
          <div class=" flex items-center justify-center">
            <Image className='' src={line} />
          </div>
        </div>

      </div>
      <div className="reel">
        <p>Got pixels? Let’s make them work. Chat soon!</p>
      </div>


      <div class="flex flex-wrap">
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4">
          <div className="p-4">
            <Image src={contact} />
          </div>

        </div>

        <div class="w-full  sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4">
          <div className="box p-14">
            <div class="mb-4">
              <input type="text" id="name" name="name" class="w-full border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-400" placeholder="Fullname" />
            </div>

            <div class="mb-4">
              <input type="email" id="name" name="name" class="w-full border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-400" placeholder="Email" />
            </div>

            <div class="mb-4 ">
              <input type="email" id="name" name="name" class="mess w-full border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-400" placeholder="What design adventure can I join you on?" />
            </div>
            <div class="mb-4 ">
              <div className="place-content-center">
                <div class="cursor-pointer mt=2 flex items-center justify-center">
                  <Image className='' src={send} />
                </div>
              </div>            </div>
          </div>
        </div>
      </div>


    </>
  )
}

export default Contact