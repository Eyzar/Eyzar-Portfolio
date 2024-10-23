"use client"

import Link from 'next/link'
import { usePathname } from 'next/navigation'
import React from 'react'

const MainNavLinks = () => {
    const links = [
        {label: "Dashboard" , href:"/"},
        {label: "Tickets" , href:"/tickets"},
        {label: "Users" , href:"users"}
    ]
    
    const currentPath = usePathname();
    return (
    <div className='flex items-center gap-4'>
        {links.map((link) => (
            <Link 
                key={link.label} 
                href={link.href}
                className={`navbar-link ${currentPath === link.href && 
                    "cursor-default text-primary hover:text-primary/60"}`
                }
            >
                {link.label}
            </Link>
        ))}
    </div>
    )
}

export default MainNavLinks;