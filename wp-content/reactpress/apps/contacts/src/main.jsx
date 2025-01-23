import React, { useState } from 'react';

const ContactForm = () => {
    const [formData, setFormData] = useState({
        name: '',
        email: '',
        message: ''
    });

    const [submitted, setSubmitted] = useState(false);

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData({
            ...formData,
            [name]: value
        });
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        // Handle form submission logic, e.g., send data to API
        console.log('Form Submitted:', formData);
        setSubmitted(true);
    };

    return (
        <div style={{ maxWidth: '400px', margin: 'auto', padding: '1em', border: '1px solid #ccc', borderRadius: '5px' }}>
            <h2>Contact Us</h2>
            {submitted ? (
                <p>Thank you for reaching out! We will get back to you soon.</p>
            ) : (
                <form onSubmit={handleSubmit}>
                    <div style={{ marginBottom: '1em' }}>
                        <label htmlFor="name" style={{ display: 'block', marginBottom: '0.5em' }}>Name:</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value={formData.name}
                            onChange={handleChange}
                            required
                            style={{ width: '100%', padding: '0.5em', borderRadius: '4px', border: '1px solid #ccc' }}
                        />
                    </div>
                    <div style={{ marginBottom: '1em' }}>
                        <label htmlFor="email" style={{ display: 'block', marginBottom: '0.5em' }}>Email:</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value={formData.email}
                            onChange={handleChange}
                            required
                            style={{ width: '100%', padding: '0.5em', borderRadius: '4px', border: '1px solid #ccc' }}
                        />
                    </div>
                    <div style={{ marginBottom: '1em' }}>
                        <label htmlFor="message" style={{ display: 'block', marginBottom: '0.5em' }}>Message:</label>
                        <textarea
                            id="message"
                            name="message"
                            value={formData.message}
                            onChange={handleChange}
                            required
                            style={{ width: '100%', padding: '0.5em', borderRadius: '4px', border: '1px solid #ccc', minHeight: '100px' }}
                        ></textarea>
                    </div>
                    <button type="submit" style={{ padding: '0.7em 1.5em', backgroundColor: '#007bff', color: '#fff', border: 'none', borderRadius: '4px', cursor: 'pointer' }}>
                        Submit
                    </button>
                </form>
            )}
        </div>
    );
};

export default ContactForm;

// import { StrictMode } from 'react'
// import { createRoot } from 'react-dom/client'
// import './index.css'
// import App from './App.jsx'

// createRoot(document.getElementById('root')).render(
//   <StrictMode>
//     <App />
//   </StrictMode>,
// )
