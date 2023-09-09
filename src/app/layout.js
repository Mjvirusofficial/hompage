// import Footer from './Component/Footer'
import './globals.css'
import { Inter } from 'next/font/google'
// import Side from './Component/Side'

const inter = Inter({ subsets: ['latin'] })



export default function RootLayout({ children }) {

  return (
    <html lang="en">
      <body className={inter.className}>
        {/* <Side /> */}
        {children}
        {/* <Footer /> */}
      </body>
    </html>
  )
}


