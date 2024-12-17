import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
import DonationForm from './components/DonationForm';

const app = document.getElementById('app');
if (app) {
    createRoot(app).render(
        <React.StrictMode>
            <DonationForm />
        </React.StrictMode>
    );
}

