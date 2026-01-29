# Assignment Submission: Web Technology Final Assignment

## 1. Student Information

**Student Name:** RAHMAN MD TANVIR
**Student ID:** 23-51455-1
**Course:** Web Technology
**Date:** January 30, 2026
---

## 2. Database Schema

The database `product_db` contains a table named `products` with the following structure:

```sql
CREATE DATABASE product_db;
USE product_db;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    buying_price DECIMAL(10, 2) NOT NULL,
    selling_price DECIMAL(10, 2) NOT NULL,
    display VARCHAR(3) DEFAULT 'No'
);
```

---

## 3. Implementation & Screenshots

### Homepage

The system's point of entry with navigation to all required tasks.

**Screenshot:**
![Homepage](screenshots/homepage.png)

---

### Task A: Add Product

Users can add products with Name, Buying Price, Selling Price, and a Display checkbox.

**Screenshot:**
![Add Product Page](screenshots/add_product.png)

---

### Task B: Display Products

Shows only products where "Display" was checked. Calculates profit dynamically (`Selling Price - Buying Price`).

**Screenshot:**
![Display Products Table](screenshots/displayProduct.png)

---

### Task C: Edit Product

Allows users to modify existing product information. The form is pre-filled with the current data from the database.

**Screenshot:**
![Edit Product Page](screenshots/editProduct.png)

---

### Task D: Delete Product

A confirmation page showing product details before final deletion.

**Screenshot:**
![Delete Product Page](screenshots/deleteProduct.png)

---

### Task E: Search Product (AJAX)

Real-time search functionality that filters products by name using AJAX without refreshing the page.

**Screenshot:**
![Search Product AJAX](screenshots/searchByNameProduct.png)

---

## 4. File Structure

- `db.php`: Database connection.
- `index.php`: Homepage.
- `nav.php`: Shared navigation bar.
- `addProduct.php`: Add product functionality.
- `displayProducts.php`: Display products list.
- `editProduct.php`: Edit product logic.
- `deleteProduct.php`: Delete product confirmation.
- `searchProduct.php`: UI for search.
- `search_handler.php`: For AJAX search.

---
