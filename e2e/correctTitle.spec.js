
import { test, expect } from '@playwright/test';

test('should have Login Page', async ({ page }) => {
  await page.goto('http://localhost:8000/login');
  
  // Expect the page title to contain "Laravel"
  await expect(page).toHaveTitle(/Laravel/);
});
