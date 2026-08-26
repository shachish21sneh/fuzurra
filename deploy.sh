#!/usr/bin/env bash
# ==============================================================================
# Fuzurra Industries Pvt. Ltd. - Automated Server Deployment Script
# Target Directory: /home2/glittl3ql/fuzurra.in
# ==============================================================================

set -e

TARGET_DIR="/home2/glittl3ql/fuzurra.in"
REPO_URL="https://github.com/shachish21sneh/fuzurra.git"

echo "========================================================"
echo "🚀 Deploying Fuzurra Industries to $TARGET_DIR"
echo "========================================================"

mkdir -p "$TARGET_DIR"
cd "$TARGET_DIR"

if [ -d ".git" ]; then
    echo "🔄 Pulling latest changes from GitHub main branch..."
    git remote set-url origin "$REPO_URL" 2>/dev/null || true
    git fetch origin main
    git reset --hard origin/main
else
    echo "📦 Initializing repository in $TARGET_DIR..."
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
echo "✅ Deployment Successful! Fuzurra Industries is live at https://fuzurra.in/"
echo "========================================================"
