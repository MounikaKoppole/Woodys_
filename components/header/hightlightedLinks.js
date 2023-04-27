'use client';
import Link from 'next/link'
import { usePathname } from 'next/navigation'

export default function RoutedLinks({ cameraTypes }) {
  const pathname = usePathname()
  const path = pathname.split('/')[1] || 'home'

  return <>
    <div className='mx-1 md:mx-2'>
      <Link href='/' passHref shallow>
        <span className={`${path==='home' ? 'font-normal' : 'font-light'}`}>home</span>
      </Link>
    </div>
    <div className='mx-1 md:mx-2'>
      <Link href='/login' passHref shallow>
        <span className={`${path==='home' ? 'font-normal' : 'font-light'}`}>login</span>
      </Link>
    </div>
  </>
}