import Link from 'next/link'
import RoutedLinks from './hightlightedLinks'
import { Suspense } from 'react'

export default function Header() {
    return <nav className='bg-slate-50 px-4 sticky top-0 z-40'>
    <div className='flex items-center justify-between pt-8 pb-4'>
        <Link href='/' passHref className='z-40 cursor-pointer'>
          <span className='text-3xl text-left font-light antialiased'>Woody's Automotive Repair Service</span>
        </Link>
      <div className='flex items-stretch pr-2'>
        <Suspense fallback={<></>}>
          <RoutedLinks />
        </Suspense>
      </div>
    </div>
  </nav>
}

