import Link from 'next/link'
import Image from 'next/image'

export default async function Home() {
  return (
    <div className='flex justify-center align-center'>
      <div id='image'>
        <img></img>
        <Link href="/book" passHref shallow className='rounded-md border-2 border-slate-900 p-4'>
          Book an Appointment
        </Link>
      </div>
    </div>
  )
}
