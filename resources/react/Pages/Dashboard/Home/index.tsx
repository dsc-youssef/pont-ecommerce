'use client'

// Dependencies
import DashboardLayout from "@/Layouts/Dashboard";

const Home: RP = ({ page_words }) => {

  return (
    <DashboardLayout title={page_words?.home}>
    </DashboardLayout>
  )
}

export default Home;
