'use client'

// Inertia
import { Head, usePage } from "@inertiajs/react";


const DashboardLayout: RL = ({ children, title }) => {
  const { layout_words } = usePage().props as ServerProps;

  return (
    <>
      <Head title={`${layout_words?.dashboard} - ${title}`}></Head>
      {children}
    </>
  )
}

export default DashboardLayout;
