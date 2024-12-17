import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
import DonationForm from './components/DonationForm';

const App = () => {
    return (
        <div className="flex flex-col min-h-screen">
            <header className="bg-blue-600 text-white p-4">
                <h1 className="text-2xl font-bold">Donation Platform</h1>
            </header>
            <main className="flex-grow">
                <DonationForm />
            </main>
            <footer className="bg-gray-200 p-4 text-center">
                <p>&copy; 2023 Donation Platform. All rights reserved.</p>
            </footer>
        </div>
    );
};

const app = document.getElementById('app');
if (app) {
    createRoot(app).render(
        <React.StrictMode>
            <App />
        </React.StrictMode>
    );
}

