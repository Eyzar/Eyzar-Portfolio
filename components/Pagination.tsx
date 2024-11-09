"use client"
import { ChevronFirst, ChevronLast, ChevronLeft, ChevronRight } from 'lucide-react'
import React from 'react'
import { Button } from './ui/button'
import { useRouter, useSearchParams } from 'next/navigation'

interface Props {
    itemCount: number,
    pageSize: number,
    currentPage: number
}

const Pagination = ({itemCount, pageSize, currentPage} : Props) => {
  
    const pageCount = Math.ceil(itemCount/pageSize)
    const router = useRouter();
    const searchParams = useSearchParams();
    
    if(pageCount <= 1) return null;

    const changePage = (page: number) => {
        const params = new URLSearchParams(searchParams.toString());
        params.set("page", page.toString());
        router.push("?"+params.toString());
    }
    return (
        <div className='my-4'>
            <div className='flex flex-row items-center justify-center'>
            <Button 
                variant="outline" 
                disabled={currentPage === 1} 
                onClick={() => changePage(1)}
            >
                <ChevronFirst />
            </Button>
            <Button 
                variant="outline" 
                disabled={currentPage === 1}
                onClick={() => changePage(currentPage - 1)}
                className='ml-2'    
            >
                <ChevronLeft />
            </Button>
            
            <p className='px-4'>Page {currentPage} of {pageCount}</p>

            <Button 
                variant="outline" 
                disabled={currentPage === pageCount}
                onClick={() => changePage(currentPage + 1)}   
                className='mr-2'     
            >
                <ChevronRight />
            </Button>
            <Button 
                variant="outline" 
                disabled={currentPage === pageCount}
                onClick={() => changePage(pageCount)}
            >
                <ChevronLast />
            </Button>
            </div>
            <div>
                
            </div>
        </div>
    )
}

export default Pagination;