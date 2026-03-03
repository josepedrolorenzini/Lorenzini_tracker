import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'

const Index = () => {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard Ancestors
                </h2>
            }
        >
            <>
                <div> Ancestors </div>
            </>
        </AuthenticatedLayout>
    );
}

export default Index
