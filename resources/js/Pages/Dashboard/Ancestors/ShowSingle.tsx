import { Ancestor } from "@/types/Ancestors";

const ShowSingle = ({ ancestor }: { ancestor: Ancestor }) => {
    const handleClick = (e: React.MouseEvent<HTMLButtonElement>) => {
        e.preventDefault();
        console.log("Ancestor data:", ancestor);
    };
    return (
        <>
            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-black ">
                        <div className="p-6 text-white bg-black ">
                            <h1 className="text-white text-2xl font-bold">
                                {ancestor.first_name} {ancestor.last_name}
                            </h1>
                            <small>Post id: {ancestor.id}</small>
                            <p>{ancestor.birth_date}</p>
                            <p>{ancestor.birth_place}</p>
                            <p>{ancestor.bio}</p>
                            <h3 className="text-">{ancestor?.relationship}</h3>
                            <h3 className="text-white">{ancestor.bio}</h3>
                        </div>
                        <button
                            onClick={handleClick}
                            className="px-4 py-2 font-bold text-white dark:bg-emerald-800 hover:bg-emerald-700-700 "
                        >
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </>
    );
};

export default ShowSingle;
