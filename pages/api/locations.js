import DB from "@/db";

export default function handler(req, res) {
    DB.instance.query(
        'select * from locations',
        (error, results, fields) => {
            console.log(error, results, fields)
        }
    )
    res.status(200).json({
        success: true
    })
}