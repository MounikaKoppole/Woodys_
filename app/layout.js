import './globals.css'
import Header from '@/components/header'
import Footer from '@/components/footer'
import { Inter } from '@next/font/google'

const inter = Inter({ subsets: ['latin'] })

export const metadata = {
  title: 'Woody\'s Automotive Repair Service',
  description: 'Generated by create next app',
}

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <body className={`${inter.className} h-screen flex flex-col text-black`}>
        <header className='sticky top-0 z-40'>
          <Header />
        </header>
        <main className='flex-1 z-0 bg-slate-300'>
          { children }
        </main>
        <Footer />
      </body>
    </html>
  )
}
