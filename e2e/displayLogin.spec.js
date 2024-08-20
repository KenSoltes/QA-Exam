
import { test, expect } from '@playwright/test';

test('should display email and password input fields and submit button', async ({ page }) => {
  await page.goto('http://localhost:8000/login');
  
  // Check for the presence of the email input field
  await expect(page.locator('input[name="email"]')).toBeVisible();
  
  // Check for the presence of the password input field
  await expect(page.locator('input[name="password"]')).toBeVisible();
  
  // Check for the presence of the submit button
  await expect(page.locator('button[type="submit"]')).toBeVisible();
});
