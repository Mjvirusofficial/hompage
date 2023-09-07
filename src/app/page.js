import Image from 'next/image'
import Navbar from './Component/Navbar'
import vas from './image/Vasile-glitch 1.png'
import line from './image/Line 1.png'
import work from './image/work.png'
import right from './image/Icon Right.png'
import fame3 from './image/Frame 3.png'
import CaseStudy from './Component/CaseStudy'
import Work from './Component/Work'
import Awards from './Component/Awards'
import Contact from './Component/Contact'
import Footer from './Component/Footer'


export default function Home() {
  return (
    <div className='m-8'>
      <nav >
        <Navbar />
      </nav>

      <div className="mt-12 intro">
        <div class=" flex flex-wrap">
          <div class=" w-full md:w-1/2 p-4">
            <div class=" p-4">
              <p className='intro-hey not-italic font-semibold text-xl'>Hey, I’m Vee! </p>

              <h2 class="into-pixel text-xl font-semibold">Pixel perfectionistwith a UX/UI playbook.</h2>
              <Image className='mt-8 mb-12' src={line} alt='img' />
              <p className=' tail'>Tailoring web & mobile magic</p>
              <p className='tail'> for the industry’s best.</p>
              <div className="mt-12 flex">
                <Image className='cursor-pointer' alt='img' src={work} />
                <Image className='ml-6 cursor-pointer' alt='img' src={right} />

              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 p-4">
            <div class="p-4">
              <Image src={vas} alt='img'/>
            </div>
          </div>
        </div>
        <div class="mt-5 flex justify-center items-center ">
          <Image className='' alt='img' src={fame3} />
        </div>
      </div>
      {/* Case studies */}
      <CaseStudy />

      {/* Work */}
      <Work />

      {/* Awards */}
      <Awards />

      {/* Contact */}
      <Contact />

      {/* Footer */}
      <Footer/>
    </div>
  )
}
