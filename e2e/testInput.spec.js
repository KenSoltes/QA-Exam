
import { test, expect } from '@playwright/test';

test('should allow typing input to email and password fields', async ({ page }) => {
  // Navigate to the login page
  await page.goto('http://localhost:8000/login');
  
  // Locate the email input field
  const emailInput = page.locator('input[name="email"]');
  
  // Type text into the email input field
  await emailInput.fill('test@example.com');
  
  // Verify that the email input field contains the typed text
  await expect(emailInput).toHaveValue('test@example.com');
  
  // Locate the password input field
  const passwordInput = page.locator('input[name="password"]');
  
  // Type text into the password input field
  await passwordInput.fill('password123');
  
  // Verify that the password input field contains the typed text
  await expect(passwordInput).toHaveValue('password123');
});
