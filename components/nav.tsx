import Link from 'next/link';
import React from 'react'
import ToggleMode from './ToggleMode';
import MainNavLinks from './MainNavLink';



const MainNav = () => {
  return (
    <div className='flex justify-between'>
        <MainNavLinks />
        <div className='flex items-center gap-4'>
            <Link href="/login">Logout</Link>
            <ToggleMode />
        </div>
    </div>
  )
}

export default MainNav;