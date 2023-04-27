export default function handler({ method, body: appointmentValues }, res) {
    if(method !== "POST") {
        res.status(400).send({
            data: "Invalid request"
        })
    }

    res.status(200).json({
        values: appointmentValues
    })
}