#!/usr/bin/env bash
# ==============================================================================
# Fuzurra Industries Pvt. Ltd. - Automated Server Deployment Script
# ==============================================================================

set -e

REPO_URL="https://github.com/shachish21sneh/fuzurra.git"

echo "========================================================"
echo "🚀 Deploying Fuzurra Industries to Server"
echo "========================================================"

if [ -d ".git" ]; then
    echo "🔄 Pulling latest changes from GitHub main branch..."
    git remote set-url origin "$REPO_URL" 2>/dev/null || true
    git fetch origin main
    git reset --hard origin/main
else
    echo "📦 Initializing repository in current directory..."
    git init
    git remote add origin "$REPO_URL"
    git fetch origin main
    git reset --hard origin/main
fi

echo "🔒 Setting proper file and directory permissions..."
chmod -R 755 .

if [ ! -f ".env" ]; then
    echo "📝 Creating .env from .env.example template..."
    cp .env.example .env 2>/dev/null || true
fi
chmod 600 .env 2>/dev/null || true

mkdir -p data
touch data/leads.json
chmod -R 777 data

echo "========================================================"
echo "✅ Deployment Successful! Fuzurra Industries is live."
echo "========================================================"
