import React, { useState } from "react";

const Form = () => {
  const [formData, setFormData] = useState({
    first_name: "",
    last_name: "",
    gender: "",
    organisation: "",
    position: "",
    email: "",
    phone: "",
    country: "",
    state: "",
    career_stage: "",
    sector: "",
    background: "",
    expertise: "",
    event_goals: "",
    personal_connection: "",
    thematic_activities: "",
    heard_about: "",
  });

  // Handle form field changes
  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  // Handle form submission
  const handleSubmit = async (e) => {
    e.preventDefault();

    const response = await fetch("http://localhost:5000/api/apply", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(formData),
    });

    const result = await response.json();
    if (response.ok) {
      alert("Application submitted successfully!");
    } else {
      alert("Error submitting application: " + result.error);
    }
  };

  return (
    <form onSubmit={handleSubmit}>
      <input type="text" name="first_name" placeholder="First Name" onChange={handleChange} required />
      <input type="text" name="last_name" placeholder="Last Name" onChange={handleChange} required />
      <input type="email" name="email" placeholder="Email" onChange={handleChange} required />
      <input type="text" name="phone" placeholder="Phone" onChange={handleChange} required />
      <button type="submit">Submit</button>
    </form>
  );
};

export default Form;
