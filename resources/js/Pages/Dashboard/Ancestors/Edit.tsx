import { Ancestor } from "@/types/Ancestors";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { useForm, Form } from "@inertiajs/react";
import TextInput from "@/Components/TextInput";
import { useEffect } from "react";

const Edit = ({ ancestor }: { ancestor: Ancestor }) => {
    const { data, setData, post, put, processing, errors } = useForm({
        id: ancestor.id,
        first_name: ancestor.first_name,
        last_name: ancestor.last_name,
        relationship: ancestor.relationship,
        birth_date: ancestor.birth_date,
        birth_place: ancestor.birth_place,
        death_date: ancestor.death_date,
        death_place: ancestor.death_place,
        bio: ancestor.bio,
    });

    useEffect(() => {
        console.log("Form data updated:", data);
    }, [data]);

    const SubmitForm = (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();
        console.log("Ancestor data:", data);
        // otherwise stick to 'post'
        put(route("dashboard.ancestors.update", { id: ancestor.id }), {
            forceFormData: true,
            onSuccess: () => console.log("Success!"),
            onError: (errors: any) => console.log("Validation errors:", errors),
        });
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
                <div className="py-12">
                    <form
                        onSubmit={SubmitForm}
                        className="mx-auto max-w-7xl sm:px-6 lg:px-8"
                    >
                        <TextInput
                            type="hidden"
                            value={data.id}
                            onChange={(e) => {
                                setData("id", e.target.value);
                            }}
                            autoComplete="on"
                        />
                        <div>
                            <div className="relative">
                                First name:
                                <input
                                    type="text"
                                    value={data.first_name}
                                    onChange={(e) => {
                                        setData("first_name", e.target.value);
                                    }}
                                    className="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12"
                                    placeholder="Change First name"
                                    autoComplete="on"
                                />
                            </div>
                        </div>
                        <div>
                            <div className="relative">
                                Last name:
                                <input
                                    type="text"
                                    value={data.last_name}
                                    onChange={(e) => {
                                        setData("last_name", e.target.value);
                                    }}
                                    className="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12"
                                    placeholder="Change last name"
                                    autoComplete="on"
                                />
                            </div>
                        </div>

                        <div>
                            <div className="relative">
                                Relationship:
                                <input
                                    type="text"
                                    value={data.relationship}
                                    onChange={(e) => {
                                        setData("relationship", e.target.value);
                                    }}
                                    className="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12"
                                    placeholder="Change relationship"
                                    autoComplete="on"
                                />
                            </div>
                        </div>

                        <div>
                            <div className="relative">
                                Birth date:
                                <input
                                    type="text"
                                    value={data.birth_date}
                                    onChange={(e) => {
                                        setData("birth_date", e.target.value);
                                    }}
                                    className="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12"
                                    placeholder="Change birth date"
                                    autoComplete="on"
                                />
                            </div>
                        </div>

                        <div>
                            <div className="relative">
                                Birth place:
                                <input
                                    type="text"
                                    value={data.birth_place}
                                    onChange={(e) => {
                                        setData("birth_place", e.target.value);
                                    }}
                                    className="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12"
                                    placeholder="Change birth place"
                                    autoComplete="on"
                                />
                            </div>
                        </div>

                        <div>
                            <div className="relative">
                                Death date:
                                <input
                                    type="text"
                                    value={data.death_date || ""}
                                    onChange={(e) => {
                                        setData("death_date", e.target.value);
                                    }}
                                    className="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12"
                                    placeholder="Change death date"
                                    autoComplete="on"
                                />
                            </div>
                        </div>
                        <div>
                            <div className="relative">
                                Death Place:
                                <input
                                    type="text"
                                    value={data.death_place || ""}
                                    onChange={(e) => {
                                        setData("death_place", e.target.value);
                                    }}
                                    className="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12"
                                    placeholder="Change death place"
                                    autoComplete="on"
                                />
                            </div>
                        </div>
                        <div>
                            <div className="relative">
                                bio:
                                <input
                                    type="text"
                                    value={data.bio || ""}
                                    onChange={(e) => {
                                        setData("bio", e.target.value);
                                    }}
                                    className="w-full p-4 text-sm border-gray-200 rounded-lg shadow-sm pe-12"
                                    placeholder="Change bio"
                                    autoComplete="on"
                                />
                            </div>
                        </div>
                        <button
                            type="submit"
                            disabled={processing}
                            className="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 disabled:opacity-50"
                        >
                            {processing ? "Saving..." : "Update Ancestor"}
                        </button>
                    </form>
                </div>
            </>
        </AuthenticatedLayout>
    );
};

export default Edit;
