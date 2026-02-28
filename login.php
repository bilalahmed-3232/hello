
    <!-- Admin Login Container -->
    <div class="admin-container">
        <div class="admin-login-card">
            <div class="text-center mb-4">
                <h2>Login Form</h2>
            </div>
            
            <!-- Login Form -->
            <form id="adminLoginForm" action="code.php" method="post">
                <div class="mb-3">
                    <label for="adminUsername" class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>
                        <input type="text" name="username" class="form-control" id="adminUsername" 
                               placeholder="Enter username" required>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="adminPassword" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>
                        <input type="password" name="password" class="form-control" id="adminPassword" 
                               placeholder="Enter password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                
                <div class="d-grid mb-4">
                    <button type="submit" name="user-login" class="btn btn-primary btn-lg">
                        <i class="bi bi-box-arrow-in-right me-2"></i> Login
                    </button>
                       <a href="public.php?register" class=" mt-4 btn btn-primary btn-small text-white">Register</a>
                </div>
                
                <div class="text-center">
                    <a href="public.php?index" class="text-decoration-none">
                        <i class="bi bi-arrow-left me-1"></i> Back to Website
                    </a>
                </div>
            </form>
        </div>
    </div>
    <style>
        .admin-login-page {
            background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-primary) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .admin-container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }
        
        .admin-login-card {
            background: var(--bg-primary);
            border-radius: var(--radius-lg);
            padding: var(--spacing-xl);
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--border-color);
        }
    </style>
