import Link from 'next/link'

export default function Footer() {
    return <footer className='bg-slate-100 py-6 px-6 text-black'>
    <div className='footer flex flex-col sm:flex-row items-center justify-between text-sm text-xs'>
      <span>Made with NextJS</span>
      <span>2023</span>
      <Link href="https://github.com/MounikaKoppole/project">
        For Database Project
      </Link>
    </div>
  </footer>
}