'use client';
import { Formik } from "formik"

async function BookAppointment() {

    return <div>
        <Formik
            initialValues={{ name: 'jared' }}
            onSubmit={ async (values, actions) => {
                const res = await fetch('http://localhost:3000/api/book', {
                method: 'POST',
                body: JSON.stringify(values),
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            const appoint = await res.json()
            alert(JSON.stringify(appoint))
            actions.setSubmitting(false);
            }}>
            {props => (
                <form onSubmit={props.handleSubmit}>
                    <label for="name">Name</label>
                    <input
                        type="text"
                        onChange={props.handleChange('name')}
                        onBlur={props.handleBlur}
                        value={props.values.name}
                        id='name'
                        name="name"
                    />
                    <button type="submit">Submit</button>
                </form>
            )}
        </Formik>
    </div>
}

BookAppointment.displayName = 'BookAppointment';

export default BookAppointment