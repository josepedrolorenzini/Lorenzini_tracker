import React, { useCallback } from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Ancestor } from "@/types/Ancestors";
import { Head, router } from "@inertiajs/react";

type Ancestors2 = {
    first_name: string;
    last_name: string;
    relationship: string;
    birth_date: string;
    birth_place: string;
    death_date: string | null;
    death_place: string | null;
    bio: string | null;
};

const Index = ({ auth, ancestors }: { auth: any; ancestors: Ancestor[] }) => {
    const [displayAncestors, setDisplayAncestors] =
        React.useState<Boolean>(false);
    console.log("Ancestors data:", ancestors);

    const handleClick = useCallback(() => {
        console.log("Ancestors data:", ancestors);
        // setDisplayAncestors((prev) => !prev);
    }, [ancestors]);

    const EditMe = () => {
        router.get(route("dashboard.ancestors.edit", { id: 1 }));
    };

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard Ancestors
                </h2>
            }
        >
            <>
                <Head title="Dashboard Ancestors" />

                {ancestors.map((ancestor) => (
                    <div className="py-12">
                        <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div className="overflow-hidden bg-black ">
                                <div className="p-6 text-white bg-black ">
                                    <h1 className="text-white text-2xl font-bold">
                                        {ancestor.first_name}{" "}
                                        {ancestor.last_name}
                                    </h1>
                                    <small>Post id: {ancestor.id}</small>
                                    <p>{ancestor.birth_date}</p>
                                    <p>{ancestor.birth_place}</p>
                                    <p>{ancestor.bio}</p>
                                    <h3 className="text-">
                                        {ancestor?.relationship}
                                    </h3>
                                    <h3 className="text-white">
                                        {ancestor.bio}
                                    </h3>
                                </div>
                                <button
                                    onClick={EditMe}
                                    className="px-4 py-2 font-bold text-white dark:bg-emerald-800 hover:bg-emerald-700-700 "
                                >
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                ))}
            </>
        </AuthenticatedLayout>
    );
};

export default Index;
