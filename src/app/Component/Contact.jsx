import React from 'react'
import Image from 'next/image'
import './CSS/Work.css'
import line from '../image/bl.png'
import contact from '../image/w.png'
import send from '../image/s.png'
function Contact() {
  return (
    <>
      <div className="work">
        <p className='text-center'>Contact</p>
        <div className="place-content-center">
          <div class=" flex items-center justify-center">
            <Image alt='img' className='' src={line} />
          </div>
        </div>

      </div>
      <div className="reel">
        <p>Got pixels? Let’s make them work. Chat soon!</p>
      </div>


      <div className="flex flex-wrap">
        <div className="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4">
          <div className="p-4">
            <Image alt='img' src={contact} />
          </div>

        </div>

        <div className="w-full   sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 p-4">
          <div className="box mbox    p-14">
            <div className=" mb-4">
              <input type="text" id="name" name="name" className=" w-full border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-300 focus:outline-none transition duration-300" placeholder="Fullname" />
            </div>

            <div className="mb-4">
              <input type="email" id="name" name="name" className="w-full border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-400 focus:ring focus:ring-blue-300 focus:outline-none transition duration-300" placeholder="Email" />
            </div>

            <div class="mb-4">
                    {/* <label for="message" class="block text-gray-700 font-semibold">Message</label> */} 
                    <textarea style={{
                      fontFamily:'lato'
                    }} id="message" placeholder='What design adventure can I join you on?' name="message" rows="4" className="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none transition duration-300"></textarea>
            </div>

           


             



            <div className="mb-4 ">
              <div className="place-content-center">
                <div className="cursor-pointer mt=2 flex items-center justify-center">
                  <Image alt='img' className='' src={send} />
                </div>
              </div>            </div>
          </div>
        </div>
      </div>


    </>
  )
}

export default Contact