import React from 'react';
import { createRoot } from 'react-dom/client'
import App from './container/App'
import './index.css';
import "tachyons";


const container = document.getElementById('root')
const root = createRoot(container)
root.render(<App />);
