"use client"
import React, { useState } from 'react'
import {
    AlertDialog,
    AlertDialogAction,
    AlertDialogCancel,
    AlertDialogContent,
    AlertDialogDescription,
    AlertDialogFooter,
    AlertDialogHeader,
    AlertDialogTitle,
    AlertDialogTrigger,
  } from "@/components/ui/alert-dialog"
import { buttonVariants } from '../ui/button'
import { useRouter } from 'next/navigation'
import axios from 'axios'

  
const DeleteButton = ({ticketId} : {ticketId: number}) => {
    const router = useRouter();
    const [error, setError] = useState<string>("");
    const [isDeleting, setIsDeleting] = useState<boolean>(false);

    const deleteTicket = async () => {
        try{
            setIsDeleting(true)
            await axios.delete("api/tickets/" + ticketId)
            router.push('/tickets');
            router.refresh();
        }catch(error){
            setIsDeleting(false);
            setError("Unknown Error Occured");
            console.log(error)
        }
    }

    return (
        <AlertDialog>
            <AlertDialogTrigger className={`${buttonVariants({variant: "destructive"})}`} disabled={isDeleting}>Delete Button</AlertDialogTrigger>
            <AlertDialogContent>
                <AlertDialogHeader>
                <AlertDialogTitle>Are you absolutely sure?</AlertDialogTitle>
                <AlertDialogDescription>
                    This action cannot be undone. This will permanently delete your ticket.
                </AlertDialogDescription>
                </AlertDialogHeader>
                <AlertDialogFooter>
                <AlertDialogCancel>Cancel</AlertDialogCancel>
                <AlertDialogAction 
                    className={`${buttonVariants({variant: "destructive"})}`} 
                    onSubmit={deleteTicket}
                    disabled={isDeleting}
                >
                        Delete
                    </AlertDialogAction>
                </AlertDialogFooter>
            </AlertDialogContent>
        </AlertDialog>

  )
}

export default DeleteButton