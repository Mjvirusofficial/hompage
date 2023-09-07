import React from 'react'
import Contact from '../Component/Contact'
import Navbar from '../Component/Navbar'
import Footer from '../Component/Footer'

export const metadata = {
    title: 'Contact',
    description: 'Generated by create next app',
  }

function contact() {
  return (
    <div>
<div className="m-8">
       <Navbar/>
       </div>
        <Contact/>

        <Footer/>
    </div>
  )
}

export default contact